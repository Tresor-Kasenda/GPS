<?php

namespace App\Livewire\Entity\Grades;

use App\Models\Grade;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des grades')]
class ListsGrades extends Component
{
    public function render(): View
    {
        return view('livewire.entity.grades.lists-grades', [
            'grades' => Grade::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
