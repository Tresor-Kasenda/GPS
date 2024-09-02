<?php

namespace App\Livewire\Pages\Transfers;

use App\Models\Service;
use App\Models\TransferAgent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Editer un transfert')]
class EditTransfers extends Component
{
    public TransferAgent $transfer;

    #[Validate('required|string|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|string|date')]
    public $transfer_date;

    public $motif = '';

    public Collection $services;

    public function mount(TransferAgent $transfer): void
    {
        $this->transfer = $transfer;
        $this->services = Service::query()->orderByDesc('created_at')->get();
        $this->transfer_date = $transfer->transfer_date->format('Y-m-d');
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.transfers.edit-transfers');
    }

    public function submit(): void
    {
        $this->validate();

        $transfer = $this->transfer->latest()->first();

        $sourceServiceId = $transfer ? $transfer->service_id : $this->agent->hiring->service->id;

        if ($this->service_id === $sourceServiceId) {
            $this->addError('service_id', 'Le service selectionner doit être différent du service actuel.');
            return;
        }

        $this->transfer->update([
            'service_id' => $this->service_id,
            'transfer_date' => $this->transfer_date,
            'motif' => $this->motif,
            'source_service_id' => $sourceServiceId,
        ]);

        $this->dispatch('message', title: "un transfert a ete modifier", type: 'success');

        $this->redirect(route('agent.lists-transfers'));
    }
}
