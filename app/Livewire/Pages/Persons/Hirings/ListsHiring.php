<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use App\Enums\StateCarrier;
use App\Enums\UserStatus;
use App\Models\Hiring;
use App\Models\Person;
use Illuminate\Database\Eloquent\Model;
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
                ->where('status', '=', StateCarrier::ACTIVE)
                ->with('person')
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }
}
