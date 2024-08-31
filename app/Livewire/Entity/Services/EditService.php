<?php

namespace App\Livewire\Entity\Services;

use App\Enums\TypeEnum;
use App\Models\Service;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Editer un service')]
class EditService extends Component
{
    public Service $service;

    #[Validate('required|string|min:4')]
    public ?string $title = '';

    #[Validate('required|string|in:Diréction,Division,Bureau,Cellule')]
    public $type = '';

    public array $types;

    public function mount(Service $service): void
    {
        $this->types = TypeEnum::cases();
        $this->title = $service->title;
        $this->service = $service;
    }

    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.services.edit-service');
    }

    public function submit(): void
    {
        $this->validate();

        $this->service->fill($this->validate());

        $this->service->save();

        $this->dispatch('message', title: "Le service a ete modifier", type: 'success');

        $this->redirect(route('entity.services-lists'));
    }
}
