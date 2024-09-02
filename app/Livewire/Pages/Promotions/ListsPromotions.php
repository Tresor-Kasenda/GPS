<?php

namespace App\Livewire\Pages\Promotions;

use App\Models\LevelAttribution;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des promotions')]
class ListsPromotions extends Component
{
    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.promotions.lists-promotions', [
            'promotions' => LevelAttribution::query()
                ->with(['agent', 'grade'])
                ->get()
        ]);
    }
}
