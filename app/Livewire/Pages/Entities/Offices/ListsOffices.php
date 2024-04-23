<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Entities\Offices;

use App\Models\Office;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes de bureaux')]
class ListsOffices extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.offices.lists-offices', [
            'offices' => Office::query()->orderByDesc('created_at')->get()
        ]);
    }
}
