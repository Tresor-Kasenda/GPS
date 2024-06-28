<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Models\Hiring;
use App\Models\Person;
use Illuminate\View\View;
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

    #[Validate('required|date|date_format:Y-m-d|after:now')]
    public string $date_commitment = '';

    #[Validate('nullable|date|date_format:Y-m-d|after:date_commitment')]
    public string $date_retirement = '';

    #[Validate('required|string|min:6|unique:hirings,matriculate')]
    public string $matriculate = '';

    #[Validate('required|string')]
    public string $carriers_state = '';

    #[Validate('nullable|file')]
    public $document = '';

    public function mount(Person $person): void
    {
        $this->person = $person;
    }

    public function render(): View
    {
        return view('livewire.pages.persons.users.hiring-physic-person');
    }

    public function submit(): void
    {
        $this->validate();

        $agent = Hiring::query()->where('person_id', $this->person->id)->first();

        if ($agent) {
            session()->flash('status', 'Cette personne exists deja dans la base des donnees');
            return;
        }

        $path = "" !== $this->document
            ? $this->document->storePublicly('/documents', ['disk' => 'public'])
            : '';

        Hiring::query()->create([
            'person_id' => $this->person->id,
            'date_commitment' => $this->date_commitment,
            'date_retirement' => $this->date_retirement,
            'carriers_state' => $this->carriers_state,
            'document' => $path,
            'matriculate' => str($this->matriculate)->upper(),
        ]);

        $this->dispatch('message', title: "Operation executer avec success", params: ['type' => 'info']);

        $this->redirect(route('engagement.lists-hiring', absolute: true));
    }
}
