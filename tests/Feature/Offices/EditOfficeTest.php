<?php

declare(strict_types=1);

use App\Livewire\Entity\Offices\EditOffice;
use App\Models\Office;
use App\Models\User;

use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

beforeEach(function (): void {
    $this->actingAs(User::factory()->create());
});

it('updates office with valid data', function (): void {
    $office = Office::factory()->create();

    Livewire::test(EditOffice::class, ['office' => $office])
        ->set('priority', '2')
        ->set('abbreviation', 'B')
        ->set('designation', 'Office B')
        ->call('submit')
        ->assertDispatched('message', title: 'Office modifiée avec succès');

    assertDatabaseHas('offices', [
        'id' => $office->id,
        'priority' => '2',
        'abbreviation' => 'B',
        'designation' => 'Office B',
    ]);
});

it('does not update office with invalid data', function (): void {
    $office = Office::factory()->create();

    Livewire::test(EditOffice::class, ['office' => $office])
        ->set('priority', null)
        ->set('abbreviation', null)
        ->set('designation', null)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('offices', [
        'id' => $office->id,
        'priority' => null,
        'abbreviation' => null,
        'designation' => null,
    ]);
});

it('does not update office with duplicate data', function (): void {
    $officeA = Office::factory()->create(['priority' => '1', 'abbreviation' => 'A', 'designation' => 'Office A']);
    $officeB = Office::factory()->create(['priority' => '2', 'abbreviation' => 'B', 'designation' => 'Office B']);

    Livewire::test(EditOffice::class, ['office' => $officeB])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Office A')
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('offices', [
        'id' => $officeB->id,
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Office A',
    ]);
});

it('redirects to the office list after updating the office', function (): void {
    $office = Office::factory()->create();

    Livewire::test(EditOffice::class, ['office' => $office])
        ->set('priority', '2')
        ->set('abbreviation', 'B')
        ->set('designation', 'Office B')
        ->call('submit')
        ->assertRedirect(route('entity.lists-office'));
});

it('does not update office invalid data', function ($priority, $abbreviation, $designation): void {
    $office = Office::factory()->create();

    Livewire::test(EditOffice::class, ['office' => $office])
        ->set('priority', $priority)
        ->set('abbreviation', $abbreviation)
        ->set('designation', $designation)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('offices', [
        'id' => $office->id,
        'priority' => $priority,
        'abbreviation' => $abbreviation,
        'designation' => $designation,
    ]);
})->with([
    [null, null, null],
    ['2', null, null],
    [null, 'B', null],
    [null, null, 'Office B'],
    ['2', 'B', null],
    ['2', null, 'Office B'],
    [null, 'B', 'Office B'],
]);
