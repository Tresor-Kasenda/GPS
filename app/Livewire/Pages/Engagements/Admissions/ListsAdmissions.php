<?php

namespace App\Livewire\Pages\Engagements\Admissions;

use App\Models\AdmissionSub;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Liste des agents admis sous status')]
class ListsAdmissions extends Component
{
    public function render(): View
    {
        return view('livewire.pages.engagements.admissions.lists-admissions', [
            'admissions' => AdmissionSub::query()->orderByDesc('created_at')->get(),
        ]);
    }
}
