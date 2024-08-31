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
#[Title('Editer une fonction')]
class EditFunction extends Component
{
    public CompanyFunction $function;

    #[Validate('required|string|max:255')]
    public ?string $name_function = '';

    public function mount(CompanyFunction $function): void
    {
        $this->function = $function;
        $this->name_function = $function->name_function;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.functions.edit-function');
    }

    public function submit(): void
    {
        $this->validate();

        $this->function->fill($this->validate());

        $this->function->save();

        $this->dispatch('message', message: 'Fonction modifier avec succès', type: 'success');

        $this->redirectRoute('entity.functions-lists');
    }
}
