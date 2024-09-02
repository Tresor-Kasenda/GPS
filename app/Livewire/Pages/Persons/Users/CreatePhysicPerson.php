<?php

declare(strict_types=1);

namespace App\Livewire\Pages\Persons\Users;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Enums\UserStatus;
use App\Models\Person;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('layouts.app')]
#[Title('Ajouter un personnel dans la liste d\'attente')]
final class CreatePhysicPerson extends Component
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

    #[Validate('required|string|in:Marié(e),Célibataire,Divorcé(e),Veuve/Veuf')]
    public string|null $marital_status = '';

    #[Validate('required|date|before:-18 years')]
    public string|null $birthdate = '';

    #[Validate('required|string|max:255')]
    public string|null $birthplace = '';

    #[Validate('required|numeric|digits:10|unique:people,phone_number')]
    public string|null $phone_number = '';

    #[Validate('required|string|max:255')]
    public string|null $address = '';

    #[Validate('nullable|image|max:5120')]
    public $image;

    public array $genders = [];
    public array $maritals = [];

    public function mount(): void
    {
        $this->genders = Gender::cases();
        $this->maritals = MaritalStatus::cases();
    }

    public function render(): View
    {
        return view('livewire.pages.persons.users.create-physic-person');
    }

    /**
     * @return RedirectResponse|void
     */
    public function submit()
    {
        $this->validate();

        $person = Person::query()
            ->where('name', $this->name)
            ->where('username', $this->username)
            ->where('firstname', $this->firstname)
            ->where('birthdate', $this->birthdate)
            ->where('phone_number', $this->phone_number)
            ->first();

        if ($person) {
            return redirect()->back()->withErrors([
                'name' => 'Cette personne existe déjà',
                'username' => 'Cette personne existe déjà',
                'firstname' => 'Cette personne existe déjà',
                'birthdate' => 'Cette personne existe déjà',
                'phone_number' => 'Cette personne existe déjà',
            ]);
        }

        $path = "" !== $this->image
            ? $this->image->storePublicly('/', ['disk' => 'public'])
            : "";


        $this->storePerson($path);

        $this->dispatch(
            'message',
            title: "Operation executer avec success",
            type: 'success'
        );

        $this->redirect(route('persons.lists-physic-person'));
    }

    protected function storePerson(string $path): void
    {
        $age = now()->diffInYears($this->birthdate);

        Person::query()->create([
            'name' => $this->name,
            'username' => $this->username,
            'firstname' => $this->firstname,
            'gender' => $this->gender,
            'marital_status' => $this->marital_status,
            'status' => UserStatus::PENDING->value,
            'birthdate' => $this->birthdate,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'birthplace' => $this->birthplace,
            'image' => $path,
            'age' => $age
        ]);
    }
}
