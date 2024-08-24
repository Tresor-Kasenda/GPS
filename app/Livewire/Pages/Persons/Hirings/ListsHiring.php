<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use App\Enums\StateCarrier;
use App\Models\Hiring;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('List des engagements')]
final class ListsHiring extends Component
{
    public function render(): Factory|View|Application
    {
        return view('livewire.pages.persons.hirings.lists-hirings', [
            'hirings' => Hiring::query()
                ->with('person')
                ->where('carriers_state', '=', StateCarrier::ACTIVE->value)
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }
}
