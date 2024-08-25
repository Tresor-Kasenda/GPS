<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\AssignmentEnum;
use App\Enums\StateCarrier;
use App\Enums\UserStatus;
use App\Models\Assignment;
use App\Models\Grade;
use App\Models\Hiring;
use App\Models\Person;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Nouvelle engagement')]
final class HiringPhysicPerson extends Component
{
    use WithFileUploads;

    public Person $person;
    #[Validate('required|date|date_format:Y-m-d')]
    public ?string $date_commitment = '';

    #[Validate('required|string|min:6|unique:hirings,matriculate')]
    public ?string $matriculate = '';

    #[Validate(['required', 'string', 'unique:grades,code'])]
    public ?string $grade = '';

    #[Validate('nullable|file')]
    public $document = '';

    public Collection $grades;

    public function mount(Person $person, Grade $grades): void
    {
        $this->person = $person;
        $this->grades = $grades->get();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.pages.persons.users.hiring-physic-person');
    }

    public function submit(): void
    {
        $this->validate();

        $hirings = Hiring::query()->where('person_id', $this->person->id)->get();

        if ($hirings->isNotEmpty()) {
            $this->addError('person_id', 'Cette personne a déjà un engagement');
            return;
        }

        $path = '' !== $this->document ? $this->document->storePublicly('/documents', ['disk' => 'public']) : '';

        $hiring = $this->storeHiring($path);

        $this->updatePerson();

        $this->makeGradeToUser($hiring, $path);

        $this->calculateSeniority($hiring);

        $this->dispatch('message', title: 'Operation executer avec success', type: 'success');

        $this->redirect(route('engagement.lists-hiring', absolute: true));
    }

    /**
     * @param string|null $path
     * @return Hiring
     */
    protected function storeHiring(?string $path): Hiring
    {
        return Hiring::query()->create([
            'person_id' => $this->person->id,
            'date_commitment' => $this->date_commitment,
            'matriculate' => $this->matriculate,
            'carriers_state' => StateCarrier::ACTIVE,
            'document' => $path,
        ]);
    }

    protected function updatePerson(): void
    {
        $this->person->update([
            'status' => UserStatus::PROGRESSING->value
        ]);
    }

    /**
     * @param Hiring $hiring
     * @param string|null $path
     * @return void
     */
    protected function makeGradeToUser(Hiring $hiring, ?string $path): void
    {
        $grade = $this->getGrade();
        Assignment::query()
            ->create([
                'hiring_id' => $hiring->id,
                'grade_id' => $grade->id,
                'date_assignment' => $this->date_commitment,
                'reason' => AssignmentEnum::INITIAL->value,
                'document' => $path
            ]);
    }

    protected function getGrade(): Model
    {
        return Grade::query()->where('id', $this->grade)->first('id');
    }


    protected function calculateSeniority(Hiring $hiring): void
    {
        $currentDate = Carbon::now();
        $hiringDate = Carbon::parse($hiring->date_commitment);

        $yearsOfService = $hiringDate->diffInYears($currentDate);

        $hiring->update([
            'seniority' => (int)$yearsOfService,
        ]);
    }
}
