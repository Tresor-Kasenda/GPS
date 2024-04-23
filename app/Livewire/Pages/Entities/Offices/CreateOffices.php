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
#[Title('Creation du bureau')]
class CreateOffices extends Component
{
    #[Validate('required|min:3')]
    public string $priority = '';

    #[Validate('required|min:3|unique:offices,abbreviation')]
    public string $abbreviation = '';

    #[Validate('nullable')]
    public string|null $designation = '';

    #[Validate('required|exists:divisions,id')]
    public int|string $division_id = '';

    public function render(): View
    {
        return view('livewire.pages.entities.offices.create-offices', [
            'divisions' => Division::all(),
        ]);
    }

    public function submit(): void
    {
        $validation = $this->validate();

        Office::query()->create($validation);

        $this->redirect(route('offices'), true);
    }
}
