<?php

namespace App\Livewire\Entity\Direction;

use App\Models\Direction;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition de la direction')]
class EditDirection extends Component
{
    public Direction $direction;

    #[Validate('required|string', onUpdate: true)]
    public string|null $priority = '';

    #[Validate('required|string', onUpdate: true)]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function mount(Direction $direction): void
    {
        $this->direction = $direction;

        $this->priority = $direction->priority;
        $this->abbreviation = $direction->abbreviation;
        $this->designation = $direction->designation;
    }

    public function render(): View
    {
        return view('livewire.entity.direction.edit-direction');
    }

    public function submit(): void
    {
        $this->validate();

        $this->direction->fill($this->validate());

        $this->direction->update();

        $this->dispatch('message', title: 'Direction modifiée avec succès');

        $this->redirect(route('entity.lists-direction'));
    }
}
