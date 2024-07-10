<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Grades;

use App\Models\Grade;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Creation des grade')]
final class CreateGrades extends Component
{
    #[Validate('required|string|unique:grades,priority')]
    public string|null $priority = '';

    #[Validate('required|string|unique:grades,level')]
    public string|null $level = '';

    #[Validate('required|string|unique:grades,code')]
    public string|null $code = '';

    #[Validate('required|string|unique:grades,tier')]
    public string|null $tier = '';

    #[Validate('required|string')]
    public string|null $description = '';


    public function render(): View
    {
        return view('livewire.entity.grades.create-grades');
    }

    public function submit(): void
    {
        $this->validate();

        Grade::query()->create($this->validate());

        $this->dispatch('message', title: "Un nouveau grade a ete ajouter", type: 'success');

        $this->redirect(route('entity.lists-grades'));
    }
}
