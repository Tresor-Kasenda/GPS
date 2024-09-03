<?php

namespace App\Livewire\Pages\EndCarrier;

use App\Enums\ReasonEnum;
use App\Models\EndCareer;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Lists Fin carriere')]
class ListsEndCarriers extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.end-carrier.lists-end-carriers', [
            'endCarriers' => EndCareer::query()
                ->where('end_reason', '=', ReasonEnum::RETIRED->value)
                ->orderByDesc('created_at')->get()
        ]);
    }
}
