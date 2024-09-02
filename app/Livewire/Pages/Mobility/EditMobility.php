<?php

namespace App\Livewire\Pages\Mobility;

use App\Enums\MobilityEnum;
use App\Models\MobilityAgent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Editer une nouvelle mobiliter')]
class EditMobility extends Component
{
    public MobilityAgent $mobility;

    #[Validate('required|date')]
    public $mobility_date = '';

    #[Validate('required|string|max:255')]
    public $mobility_type = '';

    #[Validate('required|date')]
    public $start_date = '';

    #[Validate('required|date|after:start_date')]
    public $end_date = '';

    public array $types = [];

    public function mount(MobilityAgent $mobility): void
    {
        $this->mobility = $mobility->load(['agent']);
        $this->mobility_date = $mobility->mobility_date->format('Y-m-d');
        $this->start_date = $mobility->start_date->format('Y-m-d');
        $this->end_date = $mobility->end_date->format('Y-m-d');
        $this->types = MobilityEnum::cases();
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.mobility.edit-mobility');
    }

    public function submit(): void
    {
        $this->validate();

        $this->mobility->fill($this->validate());

        $this->mobility->save();

        $this->dispatch('message', title: "la mobiliter a ete modifier", type: 'success');

        $this->redirect(route('agent.mobility-lists'));
    }
}
