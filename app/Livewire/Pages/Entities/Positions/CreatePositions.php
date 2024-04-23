<?php

namespace App\Livewire\Pages\Entities\Positions;

use App\Models\Position;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Creation une fonction')]
class CreatePositions extends Component
{
    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('nullable')]
    public string|null $description = '';

    public function render(): View
    {
        return view('livewire.pages.entities.positions.create-positions');
    }

    public function submit(): void
    {
        $validation = $this->validate();

        Position::query()->create($validation);

        $this->redirect(route('positions'), true);
    }
}
