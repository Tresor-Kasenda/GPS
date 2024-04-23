<?php

namespace App\Livewire\Pages\Entities\Positions;

use App\Models\Position;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Editer une fonction')]
class EditPositions extends Component
{
    public Position $position;

    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('nullable')]
    public string|null $description = '';

    public function mount(Position $position): void
    {
        $this->priority = $position->priority;
        $this->description = $position->description;
    }

    public function render(): View
    {
        return view('livewire.pages.entities.positions.edit-positions');
    }

    public function submit(): void
    {
        $validation = $this->validate();

        $this->position->update($validation);

        $this->redirect(route('positions'), true);
    }
}
