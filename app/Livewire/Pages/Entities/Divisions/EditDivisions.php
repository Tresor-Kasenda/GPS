<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Entities\Divisions;

use App\Models\Direction;
use App\Models\Division;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition de division')]
class EditDivisions extends Component
{
    public Division $division;

    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string|null $designation = '';

    #[Validate('required|exists:directions,id')]
    public int|string $direction_id = '';

    public function mount(Division $division): void
    {
        $this->priority = $division->priority;
        $this->abbreviation = $division->abbreviation;
        $this->designation = $division->designation;
    }

    public function render(): View
    {
        return view('livewire.pages.entities.divisions.edit-divisions', [
            'directions' => Direction::all()
        ]);
    }

    public function submit(): void
    {
        $validation = $this->validate();

        $this->division->update($validation);

        $this->redirect(route('divisions'), true);
    }
}
