<?php

use App\Enums\UserStatus;
use App\Livewire\Pages\Persons\Users\CreatePhysicPerson;
use App\Models\Person;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->user = User::factory()->create([
        'email_verified_at' => now(), // Ensure the user is verified
    ]);
    Auth::login($this->user); // Authenticate the user
});

it('requires user to be authenticated to create a physical person', function () {
    Auth::logout(); // Ensure the user is not authenticated

    Livewire::test(CreatePhysicPerson::class)
        ->set('name', 'Jane Doe')
        ->call('submit')
        ->assertForbidden(); // Assuming there's a way to assert that an action is forbidden due to lack of authentication
});

it('creates a physical person with valid data', function () {
    $response = Livewire::test(CreatePhysicPerson::class)
        ->set('name', 'John Doe')
        ->set('username', 'johndoe')
        ->set('firstname', 'John')
        ->set('gender', 'Homme')
        ->set('marital_status', 'Célibataire')
        ->set('birthdate', '2000-01-01')
        ->set('birthplace', 'City')
        ->set('phone_number', '1234567890')
        ->set('address', '123 Main St')
        ->set('profile_picture', UploadedFile::fake()->image('profile.jpg'))
        ->call('submit');

    $response->assertRedirect(route('persons.lists-physic-person'));
    expect(Person::where('username', 'johndoe')->exists())->toBeTrue();
});

it('fails to create a physical person with invalid data', function () {
    Livewire::test(CreatePhysicPerson::class)
        ->set('name', '') // Invalid name
        ->call('submit')
        ->assertHasErrors(['name' => 'required']);
});

it('fails to create a physical person with underage birthdate', function () {
    Livewire::test(CreatePhysicPerson::class)
        ->set('birthdate', now()->subYears(17)->toDateString()) // Underage
        ->call('submit')
        ->assertHasErrors(['birthdate' => 'before']);
});

it('handles file upload for profile picture correctly', function () {
    Storage::fake('public');

    $file = UploadedFile::fake()->image('profile.jpg');

    Livewire::test(CreatePhysicPerson::class)
        ->set('profile_picture', $file)
        ->call('submit');

    Storage::disk('public')->assertExists($file->hashName());
});

it('validates unique phone_number upon creation', function () {
    Person::create([
        'name' => 'Existing User',
        'username' => 'existinguser',
        'firstname' => 'Existing',
        'gender' => 'Homme',
        'marital_status' => 'Célibataire',
        'birthdate' => '1980-01-01',
        'birthplace' => 'City',
        'phone_number' => '0987654321',
        'address' => '123 Main St',
        'status' => UserStatus::PENDING->value,
    ]);

    Livewire::test(CreatePhysicPerson::class)
        ->set('phone_number', '0987654321') // Duplicate username
        ->call('submit')
        ->assertHasErrors(['phone_number' => 'unique']);
});
