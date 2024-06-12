<?php

namespace App\Livewire\Pages\Persons\Qualifications;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
class ListsQualifications extends Component
{
    public function render(): View
    {
        return view('livewire.pages.persons.qualifications.lists-qualifications');
    }
}
