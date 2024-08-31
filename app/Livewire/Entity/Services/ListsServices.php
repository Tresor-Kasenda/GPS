<?php

namespace App\Livewire\Entity\Services;

use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des services')]
class ListsServices extends Component
{
    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.services.lists-services', [
            'services' => Service::query()
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
