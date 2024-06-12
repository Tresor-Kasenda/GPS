<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class CreateHiring extends Component
{
    public function render(): View
    {
        return view('livewire.pages.persons.hirings.create-hirings');
    }
}
