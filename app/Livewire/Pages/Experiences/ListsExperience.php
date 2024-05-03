<?php

namespace App\Livewire\Pages\Experiences;

use App\Models\Experience;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des experience professionnelle')]
class ListsExperience extends Component
{
    public $selected = [];

    public function render(): View
    {
        return view('livewire.pages.experiences.lists-experience', [
            'experiences' => Experience::query()->with('person')->orderByDesc('created_at')->get()
        ]);
    }
}
