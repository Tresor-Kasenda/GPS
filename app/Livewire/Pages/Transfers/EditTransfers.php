<?php

namespace App\Livewire\Pages\Transfers;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
class EditTransfers extends Component
{
    public function render()
    {
        return view('livewire.pages.transfers.edit-transfers');
    }
}
