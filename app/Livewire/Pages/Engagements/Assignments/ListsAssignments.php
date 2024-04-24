<?php

namespace App\Livewire\Pages\Engagements\Assignments;

use App\Models\Assignment;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des attributions grade')]
class ListsAssignments extends Component
{
    public function render(): View
    {
        return view('livewire.pages.engagements.assignments.lists-assignments', [
            'assignments' => Assignment::query()->orderByDesc('created_at')->get(),
        ]);
    }
}
