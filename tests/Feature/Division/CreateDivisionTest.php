<?php

declare(strict_types=1);

use App\Livewire\Entity\Direction\CreateDirectionDivision;
use App\Models\Service;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

it('creates division with valid data', function (): void {
    $direction = Service::factory()->create();

    Livewire::test(CreateDirectionDivision::class, ['direction' => $direction])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Division A')
        ->call('submit')
        ->assertDispatched('message', title: 'Division ajoutée avec succès');

    assertDatabaseHas('divisions', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);
});

it('does not create division with invalid data', function (): void {
    $direction = Service::factory()->create();

    Livewire::test(CreateDirectionDivision::class, ['direction' => $direction])
        ->set('priority', null)
        ->set('abbreviation', null)
        ->set('designation', null)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('divisions', [
        'priority' => null,
        'abbreviation' => null,
        'designation' => null,
    ]);
});

it('does not create division with duplicate data', function (): void {
    $direction = Service::factory()->create();
    $direction->divisions()->create([
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);

    Livewire::test(CreateDirectionDivision::class, ['direction' => $direction])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Division A')
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('divisions', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);
});

it('creates division with valid data when user is authenticated', function (): void {
    $direction = Service::factory()->create();

    Livewire::test(CreateDirectionDivision::class, ['direction' => $direction])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Division A')
        ->call('submit')
        ->assertDispatched('message', title: 'Division ajoutée avec succès');

    assertDatabaseHas('divisions', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);
});

it('does not create division when user is not authenticated', function (): void {
    $direction = Service::factory()->create();

    Livewire::actingAs(null)
        ->test(CreateDirectionDivision::class, ['direction' => $direction])
        ->set('priority', '1')
        ->set('abbreviation', 'A')
        ->set('designation', 'Division A')
        ->call('submit')
        ->assertRedirect(route('login'));

    assertDatabaseMissing('divisions', [
        'priority' => '1',
        'abbreviation' => 'A',
        'designation' => 'Division A',
    ]);
});
