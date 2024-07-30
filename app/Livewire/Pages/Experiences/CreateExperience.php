<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Experiences;

use App\Models\Experience;
use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('AJouter une experience professional')]
final class CreateExperience extends Component
{
    use WithFileUploads;

    public Person $person;

    #[Validate('required|string|max:255|min:3')]
    public string|null $company_name = '';

    #[Validate('required|string|max:255|min:3')]
    public string|null $job_title = '';

    #[Validate('required|date|date_format:Y-m-d|before_or_equal: - now')]
    public string $start_date = '';

    #[Validate('required|date|date_format:Y-m-d|after:start_date')]
    public string $end_date = '';

    #[Validate('nullable|string|max:255|min:3')]
    public string|null $company_address = '';

    #[Validate('nullable|string|max:255|min:3')]
    public string|null $company_phone = '';

    #[Validate('nullable|file')]
    public $document;

    public function render(): View
    {
        return view('livewire.pages.experiences.create-experience');
    }

    public function submit(): void
    {
        $this->validate();

        $path = "" !== $this->document
            ? $this->document->storePublicly('/documents', ['disk' => 'public'])
            : '';

        $this->storeExpercience($path);

        $this->dispatch('message', title: "Une nouvelle experience professionnelle a ete ajouter", type: 'success');

        $this->redirect(route('persons.lists-experience', absolute: false));
    }

    /**
     * @param string $path
     * @return void
     */
    public function storeExpercience(string $path): void
    {
        Experience::query()
            ->create([
                'person_id' => $this->person->id,
                'company_name' => $this->company_name,
                'job_title' => $this->job_title,
                'start_date' => $this->start_date,
                'end_date' => $this->end_date,
                'company_address' => $this->company_address,
                'company_phone' => $this->company_phone,
                'document' => $path,
            ]);
    }
}
