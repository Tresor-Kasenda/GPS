<?php

namespace App\Livewire\Pages\Engagements\Hirings;

use App\Models\Hiring;
use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Editer un nouveau engagemment')]
class EditHirings extends Component
{
    use WithFileUploads;

    public Hiring $hiring;

    #[Validate('required|exists:people,id')]
    public int|string $person_id = '';

    #[Validate('required|date|date_format:Y-m-d|before_or_equal:now')]
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
        $this->person_id = $hiring->person_id;
        $this->date_commitment = $hiring->date_commitment->format('Y-m-d');
        $this->date_retirement = $hiring->date_retirement->format('Y-m-d');
        $this->matriculate = $hiring->matriculate;
        $this->carriers_state = $hiring->carriers_state;
        $this->document = $hiring->document;
    }

    public function render(): View
    {
        return view('livewire.pages.engagements.hirings.edit-hirings', [
            'peoples' => Person::query()->orderByDesc('created_at')->get(),
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        if ($this->hiring->person_id !== $this->person_id) {
            session()->flash('status', 'Cette personne exists deja dans la base des donnees');
            return;
        }

        $path = $this->document !== "fichiers"
            ? $this->document->storePublicly('/documents', ['disk' => 'public'])
            : '';

        $this->hiring->update([
            'date_commitment' => $this->date_commitment,
            'date_retirement' => $this->date_retirement,
            'matriculate' => $this->matriculate,
            'carriers_state' => $this->carriers_state,
            'document' => $path,
            'person_id' => $this->person_id,
        ]);

        $this->redirect(route('hirings'), true);
    }
}
