<?php

namespace App\Livewire\Pages\Entities\Positions;

use App\Models\Position;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des fonctions')]
class ListsPositions extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.positions.lists-positions', [
            'positions' => Position::query()->orderByDesc('created_at')->get()
        ]);
    }
}
