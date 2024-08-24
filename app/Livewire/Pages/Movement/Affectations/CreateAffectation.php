<?php

namespace App\Livewire\Pages\Movement\Affectations;

use App\Models\Division;
use App\Models\Office;
use App\Models\Person;
use App\Models\Position;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Effectuer une affectation')]
class CreateAffectation extends Component
{
    public Person $person;

    #[Validate('required|integer|exists:directions,id')]
    public ?string $direction_id = '';

    #[Validate('required|integer|exists:divisions,id')]
    public ?string $division_id = '';

    #[Validate('required|integer|exists:offices,id')]
    public ?string $office_id = '';

    #[Validate('required|integer|exists:positions,id')]
    public ?string $position_id = '';

    #[Validate('required')]
    public ?Carbon $date_affectation;

    #[Validate('required|string')]
    public ?string $position = '';

    #[Validate('required|string')]
    public ?string $document = '';

    public Collection $directions;
    public Collection $divisions;
    public Collection $offices;
    public Collection $positions;

    public function mount(Person $person): void
    {
        $this->person = $person;
        $this->directions = Service::get();
        $this->divisions = Division::get();
        $this->offices = Office::get();
        $this->positions = Position::get();
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.movement.affectations.create-affectation');
    }

    public function submit(): void
    {
        $this->validate();
    }
}
