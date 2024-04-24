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
#[Title('Creation des personnels')]
class CreatePersons extends Component
{
    use WithFileUploads;

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

    #[Validate('required|date|before_or_equal:-18 years')]
    public string|null $birthdate = '';

    #[Validate('required|string|max:255|min:3|alpha')]
    public string|null $birthplace = '';

    #[Validate('required|numeric|digits:10|unique:people,phone_number')]
    public string|null $phone_number = '';

    #[Validate('required|string|max:255')]
    public string|null $address = '';

    #[Validate('nullable|image|mimes:jpeg,png,jpg')]
    public $profile_picture = '';

    #[Validate('nullable|string|max:255|min:6|unique:people,identity_piece')]
    public string|null $identity_piece = '';

    public function render(): View
    {
        return view('livewire.pages.engagements.persons.create-persons', [
            'genders' => Gender::cases(),
            'maritals' => MaritalStatus::cases()
        ]);
    }

    public function submit(): void
    {
        $this->validate();

        $path = $this->profile_picture->storePublicly('/', ['disk' => 'public']);

        $person = Person::query()->create([
            'name' => $this->name,
            'username' => $this->username,
            'firstname' => $this->firstname,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'birthdate' => $this->birthdate,
            'birthplace' => $this->birthplace,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'identity_piece' => $this->identity_piece,
            'profile_picture' => $path
        ]);

        $this->redirect(route('persons'), true);
    }
}