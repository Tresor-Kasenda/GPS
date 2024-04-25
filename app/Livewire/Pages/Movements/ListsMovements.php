<?php

namespace App\Livewire\Pages\Movements;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Mouvement des agents')]
class ListsMovements extends Component
{
    public function render(): View
    {
        return view('livewire.pages.movements.lists-movements');
    }
}
