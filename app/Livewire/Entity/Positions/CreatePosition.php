<?php

namespace App\Livewire\Entity\Positions;

use App\Models\Position;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter une fonction')]
class CreatePosition extends Component
{
    #[Validate('required|string|unique:positions,priority')]
    public string|null $priority = '';

    #[Validate('required|string')]
    public string|null $description = '';

    public function render(): View
    {
        return view('livewire.entity.positions.create-position');
    }

    public function submit(): void
    {
        $this->validate();

        Position::query()->create($this->validate());

        $this->dispatch('message', title: "Une nouvelle fonction a ete ajouter");

        $this->redirect(route('entity.lists-position'));
    }
}
