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
#[Title('Ajouter un service')]
class CreateService extends Component
{
    #[Validate('required|string|min:4')]
    public ?string $title = '';

    #[Validate('required|string|in:Diréction,Division,Bureau,Cellule')]
    public $type = '';

    public array $types;

    public function mount(): void
    {
        $this->types = TypeEnum::cases();
    }

    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.entity.services.create-service');
    }

    public function submit(): void
    {
        $this->validate();

        Service::query()->create($this->validate());

        $this->dispatch('message', title: "Un nouveau service a ete ajouter", type: 'success');

        $this->redirect(route('entity.services-lists'));
    }
}
