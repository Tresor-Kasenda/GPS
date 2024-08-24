<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Permissions;

use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class ListsPermissions extends Component
{
    public function render(): View
    {
        return view('livewire.settings.permissions.lists-permissions');
    }
}
