<?php

namespace App\Livewire\Pages\Affectations;

use App\Models\Agent;
use App\Models\CompanyFunction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Affecter un agent')]
class AgentAffectation extends Component
{
    public Agent $agent;

    #[Validate('required|string|exists:company_functions,id')]
    public ?string $company_function_id = '';

    #[Validate('required|string|date|before_or_equal:today')]
    public $date_affectation;

    #[Validate('nullable|file')]
    public $motif = '';


    public function mount(Agent $agent): void
    {
        $this->agent = $agent->load('person');
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.affectations.agent-affectation', [
            'functions' => CompanyFunction::all()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $path = "" !== $this->motif
            ? $this->motif->storePublicly('/', ['disk' => 'public'])
            : "";

        $this->agent->affectations()->create([
            'company_function_id' => $this->company_function_id,
            'date_affectation' => $this->date_affectation,
            'motif' => $path,
        ]);

        $this->dispatch('message', message: "une nouvelle affectation a ete ajouter", type: 'success');

        $this->redirect(route('agent.affectations-lists'));
    }
}
