<?php

namespace App\Livewire\Pages\Entities\Grades;

use App\Models\Grade;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Creation des grades')]
class CreateGrades extends Component
{
    #[Validate('required|min:3|string|unique:grades,priority')]
    public string $priority = '';

    #[Validate('required|min:3|string|unique:grades,level')]
    public string $level = '';

    #[Validate('required|min:3|string')]
    public string|null $tier = '';

    #[Validate('required|string|unique:grades,code')]
    public string|null $code = '';

    #[Validate('nullable')]
    public string|null $description = '';

    public function render(): View
    {
        return view('livewire.pages.entities.grades.create-grades');
    }

    public function submit(): void
    {
        $validation = $this->validate();

        Grade::query()->create($validation);

        $this->redirect(route('grades'), true);
    }
}
