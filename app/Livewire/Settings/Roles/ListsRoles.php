<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Roles;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class ListsRoles extends Component
{
    public function render()
    {
        return view('livewire.settings.roles.lists-roles');
    }
}
