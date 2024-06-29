<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Offices;

use App\Models\Office;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des bureaux')]
final class ListsOffice extends Component
{
    public function render(): View
    {
        return view('livewire.entity.offices.lists-office', [
            'offices' => Office::query()
                ->with('division')
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
