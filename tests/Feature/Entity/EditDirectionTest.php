<?php

use App\Livewire\Entity\Direction\EditDirection;
use App\Models\Direction;
use App\Models\User;
use function Pest\Laravel\assertDatabaseHas;
use function Pest\Laravel\assertDatabaseMissing;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('updates direction with valid data', function () {
    $direction = Direction::factory()->create();

    Livewire::test(EditDirection::class, ['direction' => $direction])
        ->set('priority', '2')
        ->set('abbreviation', 'B')
        ->set('designation', 'Direction B')
        ->call('submit')
        ->assertDispatched('message', title: 'Direction modifiée avec succès');

    assertDatabaseHas('directions', [
        'id' => $direction->id,
        'priority' => '2',
        'abbreviation' => 'B',
        'designation' => 'Direction B',
    ]);
});

it('does not update direction with invalid data', function () {
    $direction = Direction::factory()->create();

    Livewire::test(EditDirection::class, ['direction' => $direction])
        ->set('priority', null)
        ->set('abbreviation', null)
        ->set('designation', null)
        ->call('submit')
        ->assertHasErrors(['priority', 'abbreviation', 'designation']);

    assertDatabaseMissing('directions', [
        'id' => $direction->id,
        'priority' => null,
        'abbreviation' => null,
        'designation' => null,
    ]);
});
