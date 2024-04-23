<?php

namespace App\Livewire\Pages\Entities\Grades;

use App\Models\Grade;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition des grades')]
class EditGrades extends Component
{
    public Grade $grade;

    #[Validate('required|min:3|string')]
    public string $priority = '';

    #[Validate('required|min:3|string')]
    public string $level = '';

    #[Validate('required|min:3|string')]
    public string|null $tier = '';

    #[Validate('required|string')]
    public string|null $code = '';

    #[Validate('nullable')]
    public string|null $description = '';

    public function mount(Grade $grade): void
    {
        $this->priority = $grade->priority;
        $this->level = $grade->level;
        $this->tier = $grade->tier;
        $this->code = $grade->code;
        $this->description = $grade->description;
    }

    public function submit(): void
    {
        $validation = $this->validate();

        $this->grade->update($validation);

        $this->redirect(route('grades'), true);
    }

    public function render(): View
    {
        return view('livewire.pages.entities.grades.edit-grades');
    }
}
