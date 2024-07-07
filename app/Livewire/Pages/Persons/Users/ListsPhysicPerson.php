<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\UserStatus;
use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('List des persons physique')]
final class ListsPhysicPerson extends Component
{
    public array $selected = [];

    public function render(): View
    {
        return view('livewire.pages.persons.users.lists-physic-person', [
            'persons' => Person::query()
                ->where('status', '=', UserStatus::PENDING->value)
                ->orderByDesc('created_at')
                ->get(),
        ]);
    }

    public function deletePerson(int $person): void
    {
        dd($person);
    }
}
