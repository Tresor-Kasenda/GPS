<?php

namespace App\Livewire\Pages\Transfers;

use App\Models\Agent;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter un transfert')]
class CreateTransfers extends Component
{
    public Agent $agent;

    #[Validate('required|string|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|string|date')]
    public $transfer_date;

    public $motif = '';

    public Collection $services;

    public function mount(Agent $agent): void
    {
        $this->agent = $agent;
        $this->services = Service::query()->orderByDesc('created_at')->get();
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {

        return view('livewire.pages.transfers.create-transfers');
    }

    public function submit(): void
    {
        $this->validate();

        $transfer = $this->agent->transfers()->latest()->first();

        $sourceServiceId = $transfer ? $transfer->service_id : $this->agent->hiring->service->id;

        if ($this->service_id === $sourceServiceId) {
            $this->addError('service_id', 'Le nouveau service doit être différent du service actuel.');
            return;
        }

        $this->agent->transfers()->create([
            'service_id' => $this->service_id,
            'transfer_date' => $this->transfer_date,
            'motif' => $this->motif,
            'source_service_id' => $sourceServiceId,
        ]);

        $this->dispatch('message', title: "une nouvelle affectation a ete ajouter", type: 'success');

        $this->redirect(route('agent.lists-transfers'));
    }
}
