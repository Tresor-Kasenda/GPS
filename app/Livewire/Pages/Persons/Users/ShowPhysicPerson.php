<?php

namespace App\Livewire\Pages\Persons\Users;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
class ShowPhysicPerson extends Component
{
    public function render()
    {
        return view('livewire.pages.persons.users.show-physic-person');
    }
}
