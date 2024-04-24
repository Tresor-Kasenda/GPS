<?php

namespace App\Livewire\Pages\Engagements;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Gestion personnel')]
class ListsEngagements extends Component
{
    public function render(): View
    {
        return view('livewire.pages.engagements.lists-engagements');
    }
}
