<?php

namespace App\Livewire\Pages\Engagements\Persons;

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
#[Title('Edition des personnels')]
class EditPersons extends Component
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

    #[Validate('required|date')]
    public string|null $birthdate = '';

    #[Validate('required|string|max:255|min:3|alpha')]
    public string|null $birthplace = '';

    #[Validate('required|numeric|digits:10')]
    public string|null $phone_number = '';

    #[Validate('required|string|max:255')]
    public string|null $address = '';

    #[Validate('nullable|string|max:255|min:6')]
    public string|null $identity_piece = '';

    public function mount(Person $person): void
    {
        $this->name = $person->name;
        $this->username = $person->username;
        $this->firstname = $person->firstname;
        $this->birthdate = $person->birthdate;
        $this->birthplace = $person->birthplace;
        $this->phone_number = $person->phone_number;
        $this->address = $person->address;
        $this->identity_piece = $person->identity_piece;
    }


    public function render(): View
    {
        return view('livewire.pages.engagements.persons.edit-persons', [
            'genders' => Gender::cases(),
            'maritals' => MaritalStatus::cases()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $this->person->update([
            'name' => $this->name,
            'username' => $this->username,
            'firstname' => $this->firstname,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'birthdate' => $this->birthdate,
            'birthplace' => $this->birthplace,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'identity_piece' => $this->identity_piece
        ]);

        $this->redirect(route('persons'), true);
    }
}
