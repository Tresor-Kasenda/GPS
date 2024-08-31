<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\UserStatus;
use App\Models\Agent;
use App\Models\Hiring;
use App\Models\Person;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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

    #[Validate('required|integer|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|date|date_format:Y-m-d')]
    public ?string $hiring_date = '';

    #[Validate('required|string')]
    public ?string $matricule = '';

    #[Validate('nullable|file')]
    public $reference = '';

    public function mount(Person $person): void
    {
        $this->person = $person;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.pages.persons.users.hiring-physic-person', [
            'services' => Service::query()->get()
        ]);
    }

    /**
     * @return void
     */
    public function submit(): void
    {
        $this->validate();

        $path = "" !== $this->reference
            ? $this->reference->storePublicly('/', ['disk' => 'public'])
            : "";

        $hiring = $this->storeHiring($path);

        $this->storeAgent($hiring);

        $this->updatePerson();

        $this->dispatch('message', message: "un agent a ete ajouter", type: 'success');

        $this->redirect(route('agent.agents-lists', absolute: false));
    }

    /**
     * @param string $path
     * @return Hiring|Model
     */
    protected function storeHiring(string $path): Hiring|Model
    {
        return Hiring::query()->create([
            'service_id' => $this->service_id,
            'hiring_date' => $this->hiring_date,
            'reference' => $path
        ]);
    }

    /**
     * @param Model|Hiring $hiring
     * @return Agent|Model
     */
    protected function storeAgent(Model|Hiring $hiring): Model|Agent
    {
        $seniority = $this->calculateSeniority($hiring);
        return Agent::query()
            ->create([
                'hiring_id' => $hiring->id,
                'person_id' => $this->person->id,
                'person_number' => $this->matricule,
                'seniority' => $seniority
            ]);
    }

    /**
     * @param Hiring $hiring
     * @return float
     */
    protected function calculateSeniority(Hiring $hiring): float
    {
        $currentDate = Carbon::now();

        return $currentDate->diffInYears(Carbon::parse($hiring->date_commitment));
    }

    public function updatePerson(): void
    {
        $this->person->update([
            'status' => UserStatus::PROGRESSING->value
        ]);
    }
}
