<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Positions;

use App\Models\Position;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
final class EditPosition extends Component
{
    public Position $position;

    #[Validate('required|string')]
    public ?string $priority = '';

    #[Validate('required|string')]
    public ?string $description = '';

    public function mount(Position $position): void
    {
        $this->position = $position;

        $this->priority = $position->priority;
        $this->description = $position->description;
    }

    public function render(): View
    {
        return view('livewire.entity.positions.edit-position');
    }

    public function submit(): void
    {
        $this->validate();

        $this->position->fill($this->validate());

        $this->position->save();

        $this->dispatch('message', title: "Une fonction a ete modifier");

        $this->redirect(route('entity.lists-position'));
    }
}
