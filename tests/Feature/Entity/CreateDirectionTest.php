<?php

use App\Livewire\Entity\Direction\CreateDirection;
use App\Models\Direction;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

describe('Create Direction', function () {
    test('create direction', function () {
        $direction = Direction::factory()->create();

        Livewire::test(CreateDirection::class)
            ->set('priority', $direction->priority)
            ->set('abbreviation', $direction->abbreviation)
            ->set('designation', $direction->designation)
            ->call('submit');

        $this->assertDatabaseHas('directions', [
            'priority' => $direction->priority,
            'abbreviation' => $direction->abbreviation,
            'designation' => $direction->designation,
        ]);
    });

    test('create direction with validation', function () {
        Livewire::test(CreateDirection::class)
            ->set('priority')
            ->set('abbreviation')
            ->set('designation')
            ->call('submit')
            ->assertHasErrors([
                'priority' => 'required',
                'abbreviation' => 'required',
                'designation' => 'required',
            ]);

        expect(Direction::count())->toBe(0);
    });

    test('create direction with unique validation', function () {
        $direction = Direction::factory()->create();

        Livewire::test(CreateDirection::class)
            ->set('priority', $direction->priority)
            ->set('abbreviation', $direction->abbreviation)
            ->set('designation', $direction->designation)
            ->call('submit')
            ->assertHasErrors([
                'priority' => 'unique',
                'abbreviation' => 'unique',
            ]);
    });

    // validation using datasets pestphp
    test('create direction with validation using datasets', function ($priority, $abbreviation, $designation) {
        Livewire::test(CreateDirection::class)
            ->set('priority', $priority)
            ->set('abbreviation', $abbreviation)
            ->set('designation', $designation)
            ->call('submit');

        expect(Direction::count())->toBe(0);
    })->with([
        'priority' => ['', '1', null],
        'abbreviation' => ['', '1', null],
        'designation' => ['', '1', null],
    ]);

    // assert dispatch event after create direction
    test('create direction with dispatch event', function () {
        Livewire::test(CreateDirection::class)
            ->set('priority', '1')
            ->set('abbreviation', 'A')
            ->set('designation', 'Direction A')
            ->call('submit')
            ->assertDispatched('message', title: 'Direction ajoutée avec succès');
    });

});
