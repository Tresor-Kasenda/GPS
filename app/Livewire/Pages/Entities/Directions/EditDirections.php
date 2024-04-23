<?php

namespace App\Livewire\Pages\Entities\Directions;

use App\Models\Direction;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Editer une direction')]
class EditDirections extends Component
{
    public Direction $direction;

    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string $designation = '';


    public function mount(Direction $direction): void
    {
        $this->priority = $direction->priority;
        $this->abbreviation = $direction->abbreviation;
        $this->designation = $direction->designation;
    }

    public function render(): View
    {
        return view('livewire.pages.entities.directions.edit-directions');
    }

    public function submit(): void
    {
        $validation = $this->validate();

        $this->direction->update($validation);

        $this->redirect(route('directions'), true);
    }
}
