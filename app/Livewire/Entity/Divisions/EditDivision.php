<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Divisions;

use App\Models\Division;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition d\'une division')]
final class EditDivision extends Component
{
    public Division $division;

    #[Validate('required|string', onUpdate: true)]
    public string|null $priority = '';

    #[Validate('required|string', onUpdate: true)]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function mount(Division $division): void
    {
        $this->division = $division;

        $this->priority = $division->priority;
        $this->abbreviation = $division->abbreviation;
        $this->designation = $division->designation;
    }

    public function render(): View
    {
        return view('livewire.entity.divisions.edit-division');
    }

    public function submit(): void
    {
        $this->validate();

        $this->division->fill($this->validate());

        $this->division->save();

        $this->dispatch('message', title: 'Division modifiée avec succès');

        $this->redirect(route('entity.lists-division'));
    }
}
