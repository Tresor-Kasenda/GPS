<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Divisions;

use App\Models\Division;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des divisions')]
final class ListsDivision extends Component
{
    public function render(): View
    {
        return view('livewire.entity.divisions.lists-division', [
            'divisions' => Division::query()
                ->with('direction')
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
