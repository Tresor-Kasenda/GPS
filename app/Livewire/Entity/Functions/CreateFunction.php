<?php

namespace App\Livewire\Entity\Functions;

use App\Models\CompanyFunction;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter une fonction')]
class CreateFunction extends Component
{
    #[Validate('required|string|max:255|unique:company_functions,name_function')]
    public ?string $name_function = '';

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.functions.create-function');
    }

    public function submit(): void
    {
        $this->validate();

        CompanyFunction::query()->create($this->validate());

        $this->dispatch('message', message: 'Fonction créée avec succès', type: 'success');

        $this->redirectRoute('entity.functions-lists');
    }
}
