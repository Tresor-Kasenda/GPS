<?php

namespace App\Livewire\Pages\Movements\Affectations;

use App\Models\Affectation;
use App\Models\Direction;
use App\Models\Division;
use App\Models\Hiring;
use App\Models\Position;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('AJouter une affectation')]
class CreateAffectations extends Component
{
    use WithFileUploads;

    #[Validate('required|int|exists:hirings,id')]
    public string|int|null $hiring_id = '';

    #[Validate('required|int|exists:directions,id')]
    public string|int|null $direction = '';

    #[Validate('required|int|exists:divisions,id')]
    public string|int|null $division = '';

    #[Validate('required|int|exists:offices,id')]
    public string|int|null $office = '';

    #[Validate('required|int|exists:positions,id')]
    public string|int|null $position = '';

    #[Validate('required|date|after_or_equal:today')]
    public string|null $date_affectation = '';

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
        return view('livewire.pages.movements.affectations.create-affectations', [
            'hirings' => Hiring::query()->orderByDesc('created_at')->get(),
            'directions' => Direction::query()->orderByDesc('created_at')->get(),
            'positions' => Position::query()->get()
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
            ? $this->document->storePublicly('/affectations', ['disk' => 'public'])
            : '';

        Affectation::query()->create([
            'hiring_id' => $this->hiring_id,
            'direction_id' => $this->direction,
            'division_id' => $this->division,
            'office_id' => $this->office_id,
            'position_id' => $this->position,
            'date_admission' => $this->date_admission,
            'document' => $path,
        ]);

        $this->redirect(route('affectations'), true);
    }
}
