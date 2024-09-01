<?php

namespace App\Livewire\Pages\Transfers;

use App\Models\Agent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter un transfert')]
class CreateTransfers extends Component
{
    public Agent $agent;

    public ?string $service_id = '';

    public string $transfer_date = '';

    public $motif = '';

    public function mount(Agent $agent): void
    {
        $this->agent = $agent;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.transfers.create-transfers');
    }

    public function sumbit(): void
    {
        $this->validate();
    }
}
