<?php

namespace App\Livewire\Pages\Movements\Affectations;

use App\Models\Affectation;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des affectations')]
class ListsAffectations extends Component
{
    public function render(): View
    {
        return view('livewire.pages.movements.affectations.lists-affectations', [
            'affectations' => Affectation::query()->orderByDesc('created_at')->get()
        ]);
    }
}
