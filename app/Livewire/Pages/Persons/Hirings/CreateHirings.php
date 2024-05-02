<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class CreateHirings extends Component
{
    public function render()
    {
        return view('livewire.pages.persons.hirings.create-hirings');
    }
}
