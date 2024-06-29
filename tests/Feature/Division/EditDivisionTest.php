<?php

declare(strict_types=1);

use App\Livewire\Entity\Divisions\EditDivision;
use App\Models\Division;
use App\Models\User;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

beforeEach(function (): void {
    $this->actingAs(User::factory()->create());
});

it('updates division with valid data', function (): void {
    $division = Division::factory()->create();

    Livewire::test(EditDivision::class, ['division' => $division])
        ->set('priority', '2')
        ->set('abbreviation', 'B')
        ->set('designation', 'Division B')
        ->call('submit')
        ->assertDispatched('message', title: 'Division modifiée avec succès');

    assertDatabaseHas('divisions', [
        'id' => $division->id,
        'priority' => '2',
        'abbreviation' => 'B',
        'designation' => 'Division B',
    ]);
});

it('does not update division with invalid data', function (): void {
    $division = Division::factory()->create();

    Livewire::test(EditDivision::class, ['division' => $division])
        ->set('priority', null)
        ->set('abbreviation', null)
        ->set('designation', null)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('divisions', [
        'id' => $division->id,
        'priority' => null,
        'abbreviation' => null,
        'designation' => null,
    ]);
});

it('does not update division with duplicate data', function (): void {
    $divisionA = Division::factory()->create(['priority' => '1', 'abbreviation' => 'A', 'designation' => 'Division A']);
    $divisionB = Division::factory()->create(['priority' => '2', 'abbreviation' => 'B', 'designation' => 'Division B']);

    Livewire::test(EditDivision::class, ['division' => $divisionB])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Division A')
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('divisions', [
        'id' => $divisionB->id,
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);
});
