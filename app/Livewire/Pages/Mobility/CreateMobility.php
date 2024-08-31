<?php

namespace App\Livewire\Pages\Mobility;

use App\Models\Agent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('AJouter une nouvelle mobiliter')]
class CreateMobility extends Component
{
    public Agent $agent;

    #[Validate('required|date|after_or_equal:today')]
    public $mobility_date = '';

    #[Validate('required|string|max:255')]
    public $mobility_type = '';

    #[Validate('required|date|after_or_equal:today')]
    public $start_date = '';

    #[Validate('required|date|after:start_date')]
    public $end_date = '';

    public function mount(Agent $agent): void
    {
        $this->agent = $agent;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.mobility.create-mobility');
    }

    public function submit(): void
    {
        $this->validate();

        $this->agent->mobilities()->create([
            'mobility_date' => $this->mobility_date,
            'mobility_type' => $this->mobility_type,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
        ]);

        $this->dispatch('message', message: "une nouvelle mobiliter a ete ajouter", type: 'success');

        $this->redirect(route('agent.mobility-lists'));
    }
}
