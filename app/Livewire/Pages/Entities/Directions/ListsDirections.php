<?php

namespace App\Livewire\Pages\Entities\Directions;

use App\Models\Direction;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Gestion de direction')]
class ListsDirections extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.directions.lists-directions', [
            'directions' => Direction::query()->orderByDesc('created_at')->get()
        ]);
    }

    public function delete(Direction $direction)
    {
        dd($direction);
    }
}
