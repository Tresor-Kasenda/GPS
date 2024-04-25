<?php

namespace App\Livewire\Pages\Movements\Affectations;

use App\Models\Affectation;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('')]
class EditAffectations extends Component
{
    use WithFileUploads;

    public Affectation $affectation;

    #[Validate('required|int|exists:hirings,id')]
    public string|int|null $hiring_id = '';

    #[Validate('required|int|exists:directions,id')]
    public string|int|null $direction = '';

    #[Validate('required|int|exists:divisions,id')]
    public string|int|null $division = '';

    #[Validate('required|int|exists:offices,id')]
    public string|int|null $office = '';

    #[Validate('required|int|exists:positions,id')]
    public string|int|null $position = '';

    #[Validate('required|date|after_or_equal:today')]
    public string|null $date_affectation = '';

    #[Validate('nullable')]
    public $document = '';

    public $divisions;

    public $offices;

    public function mount(Affectation $affectation): void
    {
        $this->hiring_id = $this->position->hiring_id;
        $this->direction = $this->position->direction_id;
        $this->divisions = $this->position->hiring_id;
        $this->divisions = collect();
        $this->offices = collect();
    }

    public function render()
    {
        return view('livewire.pages.movements.affectations.edit-affectations');
    }
}
