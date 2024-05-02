<?php

namespace App\Livewire\Pages\Persons\Hirings;

use App\Models\Hiring;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Editer Engagement')]
class EditHirings extends Component
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

    #[Validate('nullable')]
    public $document = '';

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

        $path = $this->document !== ""
            ? $this->document->storePublicly('/documents', ['disk' => 'public'])
            : $this->hiring->document;
        $this->hiring->update([
            'date_commitment' => $this->date_commitment,
            'date_retirement' => $this->date_retirement,
            'matriculate' => $this->matriculate,
            'carriers_state' => $this->carriers_state,
            'document' => $path,
        ]);

        $this->redirect(route('engagement.lists-hiring', absolute: false));
    }
}
