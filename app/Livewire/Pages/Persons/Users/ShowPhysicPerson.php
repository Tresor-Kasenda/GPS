<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Detail sur la person')]
final class ShowPhysicPerson extends Component
{
    public Person $person;

    public function mount(Person $person): void
    {
        $this->person = $person;
    }

    public function render(): View
    {
        return view('livewire.pages.persons.users.show-physic-person');
    }
}
