<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Permissions;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class CreatePermission extends Component
{
    public function render()
    {
        return view('livewire.settings.permissions.create-permission');
    }
}
