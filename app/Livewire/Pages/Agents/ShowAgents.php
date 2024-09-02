<?php

namespace App\Livewire\Pages\Agents;

use App\Models\Agent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Detail de l\'agent')]
class ShowAgents extends Component
{
    public Agent $agent;

    public function mount(Agent $agent): void
    {
        $this->agent = $agent->load(['person', 'grade', 'hiring', 'mobilities', 'affectations']);
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.agents.show-agents');
    }
}
