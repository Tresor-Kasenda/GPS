<?php

namespace App\Livewire\Pages\Engagements\Persons;

use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Detail des personnels')]
class ShowPersons extends Component
{
    public Person $person;

    public function mount(Person $person): void
    {
        $this->person = $person;
    }

    public function render(): View
    {
        return view('livewire.pages.engagements.persons.show-persons');
    }
}
