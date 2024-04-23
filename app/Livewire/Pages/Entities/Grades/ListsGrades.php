<?php

namespace App\Livewire\Pages\Entities\Grades;

use App\Models\Grade;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des grades')]
class ListsGrades extends Component
{
    public function render(): View
    {
        return view('livewire.pages.entities.grades.lists-grades', [
            'grades' => Grade::query()->orderByDesc('created_at')->get()
        ]);
    }
}
