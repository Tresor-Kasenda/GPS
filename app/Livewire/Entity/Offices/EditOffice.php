<?php

declare(strict_types=1);

namespace App\Livewire\Entity\Offices;

use App\Models\Office;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edtion d\'un bureau')]
final class EditOffice extends Component
{
    public Office $office;

    #[Validate('required|string', onUpdate: true)]
    public string|null $priority = '';

    #[Validate('required|string', onUpdate: true)]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function mount(Office $office): void
    {
        $this->office = $office;

        $this->priority = $office->priority;
        $this->abbreviation = $office->abbreviation;
        $this->designation = $office->designation;
    }

    public function render(): View
    {
        return view('livewire.entity.offices.edit-office');
    }

    public function submit(): void
    {
        $this->validate();

        $this->office->fill($this->validate());

        $this->office->save();

        $this->dispatch('message', title: 'Office modifiée avec succès');

        $this->redirect(route('entity.lists-office'));
    }
}
