<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use App\Enums\StateCarrier;
use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('List des engagements')]
final class ListsHiring extends Component
{
    public function render(): View
    {
        return view('livewire.pages.persons.hirings.lists-hirings', [
            'hirings' => Hiring::query()
                ->where('carriers_state', '=', StateCarrier::ACTIVE->value)
                ->with('person')
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }
}
