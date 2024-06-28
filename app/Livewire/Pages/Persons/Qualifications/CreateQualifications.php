<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Qualifications;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class CreateQualifications extends Component
{
    public function render(): View
    {
        return view('livewire.pages.persons.qualifications.create-qualifications');
    }
}
