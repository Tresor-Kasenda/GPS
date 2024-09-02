<?php

namespace App\Livewire\Pages\Transfers;

use App\Models\TransferAgent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des transfers')]
class ListsTransfers extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.transfers.lists-transfers', [
            'transfers' => TransferAgent::query()
                ->with(['sourceService', 'service', 'agent'])
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
