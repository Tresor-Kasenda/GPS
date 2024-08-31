<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Models\Hiring;
use App\Models\Person;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
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

    #[Validate('required|string|min:6')]
    public ?string $reference = '';

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

    public function submit(): void
    {
        $this->validate();

        $hiring = Hiring::find($this->person->id);

        if ($hiring->isNotEmpty()) {
            $this->addError('person_id', 'Cette personne a déjà un engagement');
            return;
        }

        $this->dispatch('message', title: 'Operation executer avec success', type: 'success');

        $this->redirect(route('engagement.lists-hiring', absolute: true));
    }
}
