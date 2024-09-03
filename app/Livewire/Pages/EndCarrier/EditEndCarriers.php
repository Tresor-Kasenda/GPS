<?php

namespace App\Livewire\Pages\EndCarrier;

use App\Enums\ReasonEnum;
use App\Enums\UserStatus;
use App\Models\EndCareer;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Edition fin carriere')]
class EditEndCarriers extends Component
{
    public EndCareer $career;

    #[Validate('required|date')]
    public ?string $end_date;

    #[Validate('required|string|in:Démission,Déces,Mise a la retraite,Revocation')]
    public ?string $end_reason;

    public array $reasons = [];

    public function mount(EndCareer $career): void
    {
        $this->career = $career;
        $this->reasons = ReasonEnum::cases();
        $this->end_date = $career->end_date->format('Y-m-d');
    }

    public function render(): Application|Factory|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.end-carrier.edit-end-carriers');
    }

    /**
     * @throws Exception
     */
    public function submit(): void
    {
        $this->validate();

        $this->career->update([
            'end_date' => $this->end_date,
            'end_reason' => $this->end_reason,
        ]);

        $this->updatePerson();

        $this->dispatch('message', title: "Un agent a mis fin a sa carriere", type: 'success');

        $this->redirect(route('agent.lists-promotions'));
    }

    /**
     * @throws Exception
     */
    protected function updatePerson(): void
    {
        $newStatus = match ($this->end_reason) {
            ReasonEnum::RESIGNATION->value => UserStatus::RESIGNATION->value,
            ReasonEnum::RETIRED->value => UserStatus::RETIRED->value,
            ReasonEnum::REVOKED->value => UserStatus::REVOKED->value,
            ReasonEnum::DECEASED->value => UserStatus::DECEASED->value,
            default => throw new Exception('Raison invalid'),
        };

        if ($newStatus) {
            $this->agent->person->update(['status' => $newStatus]);
        }
    }
}
