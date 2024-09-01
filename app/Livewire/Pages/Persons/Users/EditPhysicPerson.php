<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Models\Person;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Edited une person physique')]
final class EditPhysicPerson extends Component
{
    use WithFileUploads;

    public Person $person;

    #[Validate('required|string|max:255|min:3')]
    public string|null $name = '';

    #[Validate('required|string|max:255|min:3')]
    public string|null $username = '';

    #[Validate('required|string|max:255|min:3')]
    public string|null $firstname = '';

    #[Validate("required|string|in:Homme,Femme,Neutre")]
    public string|null $gender = '';

    #[Validate('required|string|in:Marié(e),Célibataire,Divorcé(e),Veuve/Veuf,Neutre')]
    public string|null $marital_status = '';

    #[Validate('required|date|before:-18 years')]
    public $birthdate = '';

    #[Validate('required|string|max:255')]
    public string|null $birthplace = '';

    #[Validate('required|numeric|digits:10')]
    public string|null $phone_number = '';

    #[Validate('required|string|max:255')]
    public string|null $address = '';

    public array $genders = [];
    public array $maritals = [];

    public function mount(Person $person): void
    {
        $this->name = $person->name;
        $this->username = $person->username;
        $this->firstname = $person->firstname;
        $this->birthdate = $person->birthdate->format('Y-m-d');
        $this->phone_number = $person->phone_number;
        $this->address = $person->address;
        $this->genders = Gender::cases();
        $this->maritals = MaritalStatus::cases();
        $this->birthplace = $person->birthplace;
    }

    public function render(): View
    {
        return view('livewire.pages.persons.users.edit-physic-person');
    }

    public function submit(): void
    {
        $this->validate();

        $this->person->fill($this->validate());

        $this->person->save();

        $this->dispatch('message', "Une mise a jours effectuer avec success");

        $this->redirect(route('persons.lists-physic-person', absolute: false));
    }
}
