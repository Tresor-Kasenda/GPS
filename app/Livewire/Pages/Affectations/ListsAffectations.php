<?php

namespace App\Livewire\Pages\Affectations;

use App\Models\Affectation;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Lists des afffectations')]
class ListsAffectations extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.affectations.lists-affectations', [
            'affectations' => Affectation::query()
                ->with(['agent', 'companyFunction'])
                ->orderByDesc('created_at')
                ->get()
        ]);
    }
}
