<?php

namespace App\Livewire\Pages\Mobility;

use App\Models\MobilityAgent;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Mobiliter des agents')]
class ListsMobility extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.mobility.lists-mobility', [
            'mobilities' => MobilityAgent::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
