<?php

namespace App\Livewire\Pages\Engagements\Assignments;

use App\Models\Assignment;
use App\Models\Grade;
use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Cree une attribution de grade')]
class CreateAssignments extends Component
{
    use WithFileUploads;

    #[Validate('required|exists:hirings,id')]
    public int|string $hiring_id = '';

    #[Validate('required|exists:grades,id')]
    public int|string $grade_id = '';

    #[Validate('required|date|date_format:Y-m-d|after_or_equal:now')]
    public string $date_assignment = '';

    #[Validate('required|string|in:Grade Initial,Evolution en Grade')]
    public string $reason = '';


    #[Validate('nullable|file')]
    public $document = '';


    public function render(): View
    {
        return view('livewire.pages.engagements.assignments.create-assignments', [
            'hirings' => Hiring::query()->whereNotIn('id', [$this->hiring_id])->get(),
            'grades' => Grade::query()->orderByDesc('created_at')->get(),
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $path = $this->document !== ""
            ? $this->document->storePublicly('/attributions', ['disk' => 'public'])
            : '';

        Assignment::query()->create([
            'hiring_id' => $this->hiring_id,
            'grade_id' => $this->grade_id,
            'date_assignment' => $this->date_assignment,
            'reason' => $this->reason,
            'document' => $path,
        ]);

        $this->redirect(route('assignments'), true);
    }
}
