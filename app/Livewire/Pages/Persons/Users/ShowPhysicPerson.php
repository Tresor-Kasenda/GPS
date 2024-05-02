<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class ShowPhysicPerson extends Component
{
    public function render()
    {
        return view('livewire.pages.persons.users.show-physic-person');
    }
}
