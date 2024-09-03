<?php

namespace App\Livewire\Pages\Promotions;

use App\Models\Grade;
use App\Models\LevelAttribution;
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
class EditPromotions extends Component
{
    public LevelAttribution $promotion;

    #[Validate('required|string|exists:grades,id')]
    public ?string $grade_id = '';

    #[Validate('required|date')]
    public $date_allocated;

    #[Validate('nullable|string')]
    public $motif_attribution;

    public Collection $grades;

    public function mount(LevelAttribution $promotion): void
    {
        $this->promotion = $promotion;
        $this->grades = Grade::query()->orderByDesc('created_at')->get();
        $this->date_allocated = $promotion->date_allocated->format('Y-m-d');
        $this->motif_attribution = $promotion->motif_attribution;
    }

    public function render(): Factory|Application|\Illuminate\Contracts\View\View|View
    {
        return view('livewire.pages.promotions.edit-promotions');
    }

    public function submit(): void
    {
        $this->validate();

        $currentGradeId = $this->promotion->agent->grade_id;

        if ($this->grade_id === $currentGradeId) {
            $this->addError('grade_id', 'La nouvelle note doit être différente de la note actuelle.');
            return;
        }

        $this->promotion->update([
            'grade_id' => $this->grade_id,
            'date_allocated' => $this->date_allocated,
            'motif_attribution' => $this->motif_attribution,
        ]);

        $this->dispatch('message', title: "Promotion updated successfully", type: 'success');

        $this->redirect(route('agent.lists-promotions'));
    }
}
