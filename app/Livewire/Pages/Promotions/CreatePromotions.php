<?php

namespace App\Livewire\Pages\Promotions;

use App\Models\Agent;
use App\Models\Grade;
use Illuminate\Contracts\View\Factory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('')]
class CreatePromotions extends Component
{
    public Agent $agent;

    #[Validate('required|string|exists:grades,id')]
    public ?string $grade_id = '';

    #[Validate('required|date')]
    public $date_allocated;

    #[Validate('nullable|string')]
    public $motif_attribution;

    public Collection $grades;

    public function mount(Agent $agent): void
    {
        $this->agent = $agent;
        $this->grades = Grade::query()->orderByDesc('created_at')->get();
    }

    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.promotions.create-promotions');
    }

    public function submit(): void
    {
        $this->validate();

        $currentGradeId = $this->agent->grade_id;

        if ($this->grade_id === $currentGradeId) {
            $this->addError('grade_id', 'The new grade must be different from the current grade.');
            return;
        }

        $this->agent->promotions()->create([
            'grade_id' => $this->grade_id,
            'date_allocated' => $this->date_allocated,
            'motif_attribution' => $this->motif_attribution,
        ]);

        $this->dispatch('message', title: "Promotion added successfully", type: 'success');

        $this->redirect(route('agent.lists-promotions'));
    }
}
