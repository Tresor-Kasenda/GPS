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
#[Title('Creation de division')]
class CreateDivisions extends Component
{
    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3|unique:divisions,abbreviation')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string|null $designation = '';

    #[Validate('required|exists:directions,id')]
    public int|string $direction_id = '';

    public function render(): View
    {
        return view('livewire.pages.entities.divisions.create-divisions', [
            'directions' => Direction::all()
        ]);
    }

    public function submit(): void
    {
        $validation = $this->validate();

        Division::query()->create($validation);

        $this->redirect(route('divisions'), true);
    }
}
