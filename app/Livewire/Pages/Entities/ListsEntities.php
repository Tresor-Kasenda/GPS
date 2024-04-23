<?php

namespace App\Livewire\Pages\Entities;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout("layouts.app")]
#[Title("Gestion des entités")]
class ListsEntities extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.lists-entities');
    }
}
