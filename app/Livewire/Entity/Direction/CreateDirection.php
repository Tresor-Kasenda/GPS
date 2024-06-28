<?php

namespace App\Livewire\Entity\Direction;

use App\Models\Direction;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter une Direction')]
class CreateDirection extends Component
{
    #[Validate('required|string|unique:directions,priority')]
    public string|null $priority = '';

    #[Validate('required|string|unique:directions,abbreviation')]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function render(): View
    {
        return view('livewire.entity.direction.create-direction');
    }

    public function submit(): void
    {
        $this->validate();

        Direction::query()->create($this->validate());

        $this->dispatch('message', title: 'Direction ajoutée avec succès');

        $this->redirect(route('entity.lists-direction'));
    }
}
