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
#[Title('Revocation')]
class ListsEndRevoked extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.end-carrier.lists-end-revoked', [
            'endCarriers' => EndCareer::query()
                ->where('end_reason', '=', ReasonEnum::REVOKED->value)
                ->orderByDesc('created_at')->get()
        ]);
    }
}
