<?php

namespace App\Livewire\Entity\Positions;

use App\Models\Position;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des fonctions')]
class ListsPosition extends Component
{
    public function render(): View
    {
        return view('livewire.entity.positions.lists-position', [
            'positions' => Position::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
