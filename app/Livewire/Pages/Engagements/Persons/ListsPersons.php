<?php

namespace App\Livewire\Pages\Engagements\Persons;

use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des personnels')]
class ListsPersons extends Component
{
    public function render(): View
    {
        return view('livewire.pages.engagements.persons.lists-persons', [
            'peoples' => Person::query()->orderByDesc('created_at')->paginate(10)
        ]);
    }
}
