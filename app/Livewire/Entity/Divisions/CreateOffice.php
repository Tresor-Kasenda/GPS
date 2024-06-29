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
#[Title('Ajouter des bureaux')]
final class CreateOffice extends Component
{
    public Division $division;

    #[Validate('required|string|unique:offices,priority')]
    public string|null $priority = '';

    #[Validate('required|string|unique:offices,abbreviation')]
    public string|null $abbreviation = '';

    #[Validate('required|string')]
    public string|null $designation = '';

    public function mount(Division $division): void
    {
        $this->division = $division;
    }

    public function render(): View
    {
        return view('livewire.entity.divisions.create-office');
    }

    public function submit(): void
    {
        $this->validate();

        $this->division->offices()->create($this->validate());

        $this->dispatch('message', title: 'Bureau ajoutée avec succès');

        $this->redirect(route('entity.lists-office'));
    }
}
