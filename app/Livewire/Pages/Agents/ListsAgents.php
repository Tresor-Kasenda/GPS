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
#[Title('Lists des agents')]
class ListsAgents extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.agents.lists-agents', [
            'agents' => Agent::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
