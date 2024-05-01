<?php

namespace App\Livewire\Pages\Persons\Users;

use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des personnes physique')]
class ListsPhysicPerson extends Component
{
    public function render(): View
    {
        return view('livewire.pages.persons.users.lists-physic-person', [
            'persons' => Person::query()->orderByDesc('created_at')->get()
        ]);
    }

    public function deletePerson(int $person)
    {
        dd($person);
    }
}
