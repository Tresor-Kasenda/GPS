<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\StateCarrier;
use App\Enums\UserStatus;
use App\Models\Agent;
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

#[Layout('layouts.app')]
#[Title('Nouvelle engagement')]
final class HiringPhysicPerson extends Component
{
    public Person $person;

    public Model $hiring_id;

    #[Validate('required|string|exists:grades,id')]
    public ?string $grade_id = '';

    #[Validate('nullable|string|min:6|max:6|unique:agents,person_number')]
    public ?string $matricule = '';

    public Collection $grades;

    public function mount(Person $person): void
    {
        $this->person = $person;

        $this->hiring_id = Hiring::query()->latest()->first();

        $this->grades = Grade::query()->orderByDesc('created_at')->get();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.pages.persons.users.hiring-physic-person');
    }

    /**
     * @return void
     */
    public function submit(): void
    {
        $this->validate();

        $this->storeAgent();

        $this->updatePerson();

        $this->dispatch('message', message: "un agent a ete ajouter", type: 'success');

        $this->redirect(route('agent.agents-lists', absolute: false));
    }


    /**
     * @param Model|Hiring $hiring
     * @return Agent|Model
     */
    protected function storeAgent(): Model|Agent
    {
        $seniority = $this->calculateSeniority($this->hiring_id);
        return Agent::query()
            ->create([
                'hiring_id' => $this->hiring_id->id,
                'person_id' => $this->person->id,
                'person_number' => $this->matricule ?? "NU",
                'seniority' => $seniority,
                'status' => StateCarrier::ACTIVE->value,
                'grade_id' => $this->grade_id
            ]);
    }

    /**
     * @param Hiring $hiring
     * @return float
     */
    protected function calculateSeniority(Hiring $hiring): float
    {
        $currentDate = Carbon::now();

        return $currentDate->diffInYears(Carbon::parse($hiring->hiring_date));
    }

    public function updatePerson(): void
    {
        $this->person->update([
            'status' => UserStatus::PROGRESSING->value
        ]);
    }
}
