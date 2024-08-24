<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Users;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class CreateUsers extends Component
{
    public function render()
    {
        return view('livewire.settings.users.create-users');
    }
}
