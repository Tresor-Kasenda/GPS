<?php

namespace App\Livewire\Pages\Affectations;

use App\Models\Affectation;
use App\Models\CompanyFunction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Editer une affectation')]
class EditAgentAffectation extends Component
{
    use WithFileUploads;

    public Affectation $affectation;

    #[Validate('required|string|exists:company_functions,id')]
    public ?string $company_function_id = '';

    #[Validate('required|string|date|before_or_equal:today')]
    public $date_affectation;

    public function mount(Affectation $affectation): void
    {
        $this->affectation = $affectation->load(['agent.person', 'companyFunction'])->first();
        $this->date_affectation = $affectation->date_affectation->format('Y-m-d');
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.affectations.edit-agent-affectation', [
            'functions' => CompanyFunction::all()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $this->affectation->fill($this->validate());

        $this->affectation->save();

        $this->dispatch('message', message: "une nouvelle affectation a ete ajouter", type: 'success');

        $this->redirect(route('agent.affectations-lists'));
    }
}
