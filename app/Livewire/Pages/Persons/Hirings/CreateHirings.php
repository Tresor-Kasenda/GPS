<?php

namespace App\Livewire\Pages\Persons\Hirings;

use App\Models\Hiring;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Ajouter un engagement')]
class CreateHirings extends Component
{
    #[Validate('required|integer|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|date|date_format:Y-m-d')]
    public ?string $hiring_date = '';

    #[Validate('required|string|min:10|max:10')]
    public ?string $reference = '';

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.persons.hirings.create-hirings', [
            'services' => Service::query()->get()
        ]);
    }


    public function submit(): void
    {
        $this->validate();

        Hiring::query()->create([
            'service_id' => $this->service_id,
            'hiring_date' => $this->hiring_date,
            'reference' => $this->reference
        ]);

        $this->dispatch('message', message: "un engaement a ete ajouter", type: 'success');

        $this->redirect(route('persons.lists-hirings', absolute: false));
    }
}
