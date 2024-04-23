<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Entities\Divisions;

use App\Models\Division;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste de divisions')]
class ListsDivisions extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.divisions.lists-divisions', [
            'divisions' => Division::query()
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }
}
