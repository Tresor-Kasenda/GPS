<?php

namespace App\Livewire\Pages\Agents;

use App\Models\{Agent, Hiring, Service};
use Carbon\Carbon;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\{Layout, Title, Validate};
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('editer un agent')]
class EditAgents extends Component
{
    public Agent $agent;

    #[Validate('required|integer|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|date|date_format:Y-m-d')]
    public ?string $hiring_date = '';

    #[Validate('required|string')]
    public ?string $matricule = '';

    public function mount(Agent $agent): void
    {
        $this->agent = $agent->load(['person']);
        $this->hiring_date = $agent->hiring->hiring_date->format('Y-m-d');
        $this->matricule = $agent->person_number;
    }

    public function render(): Application|Factory|View
    {
        return view('livewire.pages.agents.edit-agents', [
            'services' => Service::all()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $this->agent->hiring->update([
            'service_id' => $this->service_id,
            'hiring_date' => $this->hiring_date,
        ]);

        $this->agent->update([
            'person_number' => $this->matricule,
            'seniority' => $this->calculateSeniority($this->agent->hiring),
        ]);

        $this->dispatch('message', message: "un agent a ete ajouter", type: 'success');
        $this->redirect(route('agent.agents-lists'));
    }

    protected function calculateSeniority(Hiring $hiring): float
    {
        return Carbon::now()->diffInYears(Carbon::parse($hiring->hiring_date));
    }
}
