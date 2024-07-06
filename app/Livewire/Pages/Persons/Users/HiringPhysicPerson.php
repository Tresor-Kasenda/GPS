<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\StateCarrier;
use App\Enums\UserStatus;
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
    public ?string $date_commitment = '';

    #[Validate('required|string|min:6|unique:hirings,matriculate')]
    public ?string $matriculate = '';

    #[Validate('nullable|file')]
    public $document = '';

    public array $statuses = [];

    public function mount(Person $person): void
    {
        $this->person = $person;
        $this->statuses = StateCarrier::cases();
    }

    public function render(): View
    {
        return view('livewire.pages.persons.users.hiring-physic-person');
    }

    public function submit(): void
    {
        $this->validate();

        if (Hiring::where('person_id', $this->person->id)->exists()) {

            $this->dispatch('message', title: 'Cette personne exists deja dans la base des donnees');

            return;
        }

        $path = '' !== $this->document ? $this->document->storePublicly('/documents', ['disk' => 'public']) : '';

        Hiring::query()->create([
            'person_id' => $this->person->id,
            'date_commitment' => $this->date_commitment,
            'matriculate' => $this->matriculate,
            'carriers_state' => StateCarrier::ACTIVE,
            'document' => $path,
        ]);

        $this->updatePerson();

        $this->dispatch('message', title: 'Operation executer avec success');

        $this->redirect(route('engagement.lists-hiring', absolute: true));
    }

    protected function updatePerson(): void {
        $this->person->update([
            'status' => UserStatus::PROGRESSING->value
        ]);
    }
}
