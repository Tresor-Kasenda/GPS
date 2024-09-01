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
#[Title('Editer un engagement')]
class EditHirings extends Component
{
    public Hiring $hiring;

    #[Validate('required|integer|exists:services,id')]
    public ?string $service_id = '';

    #[Validate('required|date|date_format:d-m-Y')]
    public $hiring_date;

    #[Validate('required|string|min:5')]
    public ?string $reference = '';

    public function mount(Hiring $hiring): void
    {
        $this->hiring = $hiring;
        $this->service_id = (string)$hiring->service_id;
        $this->hiring_date = $hiring->hiring_date->format('d-m-Y');
        $this->reference = $hiring->reference;
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.persons.hirings.edit-hirings', [
            'services' => Service::query()->get()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $this->hiring->first($this->validate());

        $this->dispatch('message', message: "un engaement a ete modifier", type: 'success');

        $this->redirect(route('persons.lists-hirings', absolute: false));
    }
}
