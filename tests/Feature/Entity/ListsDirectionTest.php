<?php

use App\Models\Direction;
use App\Models\User;
use function Pest\Laravel\actingAs;

beforeEach(function () {
    $this->user = User::factory()->create();
});

describe('directions', function () {
    it('should return a list of directions', function () {
        $directions = Direction::factory(5)->create();
        actingAs($this->user)
            ->get(route('entity.lists-direction'))
            ->assertSee($directions->first()->priority)
            ->assertSee($directions->last()->designation);
    });

    // should delete
    it('should delete a direction', function () {
        $direction = Direction::factory()->create();
        actingAs($this->user)
            ->call('delete', $direction->id)
            ->assertDispatched('message', 'Direction deleted successfully');
    });
});
