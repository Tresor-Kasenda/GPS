<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

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
                ->with('person:id,name,firstname,username,gender,profile_picture')
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
