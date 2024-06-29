<?php

use App\Livewire\Entity\Divisions\CreateOffice;
use App\Models\Division;
use App\Models\User;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('creates office with valid data', function () {
    $division = Division::factory()->create();

    Livewire::test(CreateOffice::class, ['division' => $division])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Office A')
        ->call('submit')
        ->assertDispatched('message', title: 'Bureau ajoutée avec succès');

    assertDatabaseHas('offices', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Office A',
    ]);
});

it('does not create office with invalid data', function () {
    $division = Division::factory()->create();

    Livewire::test(CreateOffice::class, ['division' => $division])
        ->set('priority', null)
        ->set('abbreviation', null)
        ->set('designation', null)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('offices', [
        'priority' => null,
        'abbreviation' => null,
        'designation' => null,
    ]);
});

it('does not create office with duplicate data', function () {
    $division = Division::factory()->create();
    $division->offices()->create([
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Office A',
    ]);

    Livewire::test(CreateOffice::class, ['division' => $division])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Office A')
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('offices', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Office A',
    ]);
});
