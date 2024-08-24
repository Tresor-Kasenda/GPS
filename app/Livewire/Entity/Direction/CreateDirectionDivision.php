<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Direction;

use App\Models\Service;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter une division a partir de direction')]
final class CreateDirectionDivision extends Component
{
    public Service $direction;

    #[Validate('required|string|unique:divisions,priority')]
    public string|null $priority = '';

    #[Validate('required|string|unique:divisions,abbreviation')]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function mount(Service $direction): void
    {
        $this->direction = $direction;
    }

    public function render(): View
    {
        return view('livewire.entity.direction.create-division');
    }

    public function submit(): void
    {
        $this->validate();

        $this->direction->divisions()->create($this->validate());

        $this->dispatch('message', title: 'Division ajoutée avec succès', type: 'success');

        $this->redirect(route('entity.lists-division'));
    }
}
