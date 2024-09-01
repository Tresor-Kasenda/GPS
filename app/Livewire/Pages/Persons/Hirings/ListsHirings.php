<?php

namespace App\Livewire\Pages\Persons\Hirings;

use App\Models\Hiring;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des engagements')]
class ListsHirings extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.persons.hirings.lists-hirings', [
            'hirings' => Hiring::query()->orderByDesc('created_at')->get()
        ]);
    }
}
