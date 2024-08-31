<?php

namespace App\Livewire\Pages\Mobility;

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

    #[Validate('required|date|after_or_equal:today')]
    public $mobility_date = '';

    #[Validate('required|string|max:255')]
    public $mobility_type = '';

    #[Validate('required|date|after_or_equal:today')]
    public $start_date = '';

    #[Validate('required|date|after:start_date')]
    public $end_date = '';

    public function mount(MobilityAgent $mobility): void
    {
        $this->mobility = $mobility->load(['agent']);
        $this->mobility_date = $mobility->mobility_date->format('Y-m-d');
        $this->mobility_type = $mobility->mobility_type;
        $this->start_date = $mobility->start_date->format('Y-m-d');
        $this->end_date = $mobility->end_date->format('Y-m-d');
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.mobility.edit-mobility');
    }

    public function submit(): void
    {
        $this->validate();

        $this->mobility->update([
            'mobility_date' => $this->mobility_date,
            'mobility_type' => $this->mobility_type,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->dispatch('message', message: "la mobiliter a ete modifier", type: 'success');

        $this->redirect(route('agent.mobility-lists'));
    }
}
