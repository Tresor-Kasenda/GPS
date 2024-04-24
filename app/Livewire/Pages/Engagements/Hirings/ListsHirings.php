<?php

namespace App\Livewire\Pages\Engagements\Hirings;

use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Lists des engagements')]
class ListsHirings extends Component
{
    public function render(): View
    {
        return view('livewire.pages.engagements.hirings.lists-hirings', [
            'hirings' => Hiring::query()->orderByDesc('created_at')->get(),
        ]);
    }
}
