<?php

namespace App\Livewire\Pages\Entities\Offices;

use App\Models\Division;
use App\Models\Office;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition du bureau')]
class EditOffices extends Component
{
    public Office $office;

    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string|null $designation = '';

    #[Validate('required|exists:division,id')]
    public int|string $division_id = '';

    public function mount(Office $office): void
    {
        $this->priority = $office->priority;
        $this->abbreviation = $office->abbreviation;
        $this->designation = $office->designation;
    }

    public function render(): View
    {
        return view('livewire.pages.entities.offices.edit-offices', [
            'divisions' => Division::all(),
        ]);
    }

    public function submit(): void
    {
        $validation = $this->validate();

        $this->office->update($validation);

        $this->redirect(route('offices'), true);
    }
}
