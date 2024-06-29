<?php

namespace App\Livewire\Entity\Grades;

use App\Models\Grade;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition de grade')]
class EditGrades extends Component
{
    public Grade $grade;

    #[Validate('required|string', onUpdate: true)]
    public string|null $priority = '';

    #[Validate('required|string')]
    public string|null $level = '';

    #[Validate('required|string')]
    public string|null $code = '';

    #[Validate('required|string')]
    public string|null $tier = '';

    #[Validate('required|string')]
    public string|null $description = '';

    public function mount(Grade $grade): void
    {
        $this->grade = $grade;

        $this->priority = $grade->priority;
        $this->level = $grade->level;
        $this->code = $grade->code;
        $this->tier = $grade->tier;
        $this->description = $grade->description;
    }

    public function render(): View
    {
        return view('livewire.entity.grades.edit-grades');
    }

    public function submit(): void
    {
        $this->validate();

        $this->grade->fill($this->validate());

        $this->grade->save();

        $this->dispatch('message', title: "Un grade a ete modifier avec success");

        $this->redirect(route('entity.lists-grades'));
    }
}
