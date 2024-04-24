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
#[Title('Creer un nouveau engagemment')]
class CreateHirings extends Component
{
    use WithFileUploads;

    #[Validate('required|exists:people,id|unique:hirings,person_id')]
    public int|string $person_id = '';

    #[Validate('required|date|date_format:Y-m-d|before_or_equal:now')]
    public string $date_commitment = '';

    #[Validate('nullable|date|date_format:Y-m-d|after:date_commitment')]
    public string $date_retirement = '';

    #[Validate('required|string|min:6|unique:hirings,matriculate')]
    public string $matriculate = '';

    #[Validate('required|string')]
    public string $carriers_state = '';

    #[Validate('nullable|file')]
    public $document = '';


    public function render(): View
    {
        return view('livewire.pages.engagements.hirings.create-hirings', [
            'peoples' => Person::query()->orderByDesc('created_at')->get(),
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $agent = Hiring::query()->where('person_id', $this->person_id)->first();

        if ($agent) {
            session()->flash('status', 'Cette personne exists deja dans la base des donnees');
            return;
        }

        $path = $this->document !== ""
            ? $this->document->storePublicly('/documents', ['disk' => 'public'])
            : '';

        Hiring::query()->create([
            'person_id' => $this->person_id,
            'date_commitment' => $this->date_commitment,
            'date_retirement' => $this->date_retirement,
            'carriers_state' => $this->carriers_state,
            'document' => $path,
            'matriculate' => str($this->matriculate)->upper(),
        ]);

        $this->redirect(route('hirings'), true);
    }
}
