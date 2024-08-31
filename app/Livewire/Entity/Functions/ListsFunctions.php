<?php

namespace App\Livewire\Entity\Functions;

use App\Models\CompanyFunction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Listes des fonctions')]
class ListsFunctions extends Component
{
    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.functions.lists-functions', [
            'functions' => CompanyFunction::all()
        ]);
    }
}
