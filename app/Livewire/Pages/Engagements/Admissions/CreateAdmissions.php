<?php

namespace App\Livewire\Pages\Engagements\Admissions;

use App\Models\AdmissionSub;
use App\Models\Direction;
use App\Models\Division;
use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Mettre un agent sous status')]
class CreateAdmissions extends Component
{
    use WithFileUploads;

    #[Validate('required|int|exists:hirings,id')]
    public string|int|null $hiring_id = '';

    #[Validate('required|int|exists:directions,id')]
    public string|int|null $direction = '';

    #[Validate('required|int|exists:divisions,id')]
    public string|int|null $division = '';

    #[Validate('required|int|exists:offices,id')]
    public string|int|null $office_id = '';

    #[Validate('required|date|after_or_equal:today')]
    public string|null $date_admission = '';

    #[Validate('nullable')]
    public $document = '';

    public $divisions;

    public $offices;


    public function mount(): void
    {
        $this->divisions = collect();
        $this->offices = collect();
    }

    public function render(): View
    {
        return view('livewire.pages.engagements.admissions.create-admissions', [
            'hirings' => Hiring::query()->orderByDesc('created_at')->get(),
            'directions' => Direction::query()->orderByDesc('created_at')->get(),
        ]);
    }

    public function updatedDirection($state): void
    {
        $this->divisions = Division::query()->where('direction_id', '=', $state)->get();
    }

    public function updatedDivision($state): void
    {
        $this->divisions = Division::query()->where('direction_id', '=', $state)->get();
    }

    public function submit(): void
    {
        $this->validate();

        $path = $this->document !== ""
            ? $this->document->storePublicly('/admissions', ['disk' => 'public'])
            : '';

        AdmissionSub::query()->create([
            'hiring_id' => $this->hiring_id,
            'direction_id' => $this->direction_id,
            'division_id' => $this->division_id,
            'office_id' => $this->office_id,
            'date_admission' => $this->date_admission,
            'document' => $path,
        ]);

        $this->redirect(route('admissions'), true);
    }
}
