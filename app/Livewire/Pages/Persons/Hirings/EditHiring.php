<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Hirings;

use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Edited Engagement')]
final class EditHiring extends Component
{
    use WithFileUploads;

    public Hiring $hiring;

    #[Validate('required|date|date_format:Y-m-d|after:now')]
    public string $date_commitment = '';

    #[Validate('nullable|date|date_format:Y-m-d|after:date_commitment')]
    public string $date_retirement = '';

    #[Validate('required|string')]
    public string $matriculate = '';

    #[Validate('required|string')]
    public string $carriers_state = '';

    public function mount(Hiring $hiring): void
    {
        $this->date_commitment = $hiring->date_commitment->format('Y-m-d');

        if ($this->date_retirement) {
            $this->date_retirement = $hiring->date_retirement->format('Y-m-d');
        }

        $this->matriculate = $hiring->matriculate;
        $this->carriers_state = $hiring->carriers_state;
    }

    public function render(): View
    {
        return view('livewire.pages.persons.hirings.edit-hirings');
    }

    public function submit(): void
    {
        $this->validate();

        $this->hiring->fill($this->validate());

        $this->hiring->save();

        $this->dispatch('message', message: "Mise a jours effectuer avec success");

        $this->redirect(route('engagement.lists-hiring', absolute: false));
    }
}
