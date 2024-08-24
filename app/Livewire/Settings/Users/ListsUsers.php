<?php

declare(strict_types=1);

namespace App\Livewire\Settings\Users;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des utilisateurs')]
final class ListsUsers extends Component
{
    public function render(): View|Factory|Application
    {
        return view('livewire.settings.users.lists-users', [
            'users' => User::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
