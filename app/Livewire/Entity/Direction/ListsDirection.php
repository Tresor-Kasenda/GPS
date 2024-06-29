<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Direction;

use App\Models\Direction;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des directions')]
final class ListsDirection extends Component
{
    public function render(): View
    {
        return view('livewire.entity.direction.lists-direction', [
            'directions' => Direction::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }

    public function deleteDirection(string $direction): void
    {
        dd($direction);
    }
}
