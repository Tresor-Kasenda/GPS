<?php

namespace App\Livewire\Pages\Entities\Directions;

use App\Models\Direction;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter une direction')]
class CreateDirections extends Component
{
    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3|unique:directions,abbreviation')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string $designation = '';

    public function render(): View
    {
        return view('livewire.pages.entities.directions.create-directions');
    }

    public function submit(): void
    {
        $validation = $this->validate();

        Direction::query()->create($validation);

        $this->redirect(route('directions'), true);
    }
}
