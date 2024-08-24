<?php

namespace App\Livewire\Pages\Movement\Affectations;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
class ListsAffectations extends Component
{
    public function render()
    {
        return view('livewire.pages.movement.affectations.lists-affectations');
    }
}
