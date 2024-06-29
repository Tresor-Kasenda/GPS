<?php

declare(strict_types=1);

use App\Models\Direction;
use App\Models\User;
use function Pest\Laravel\actingAs;

beforeEach(function (): void {
    $this->user = User::factory()->create();
});

describe('directions', function (): void {
    it('should return a list of directions', function (): void {
        $directions = Direction::factory(5)->create();
        actingAs($this->user)
            ->get(route('entity.lists-direction'))
            ->assertSee($directions->first()->priority)
            ->assertSee($directions->last()->designation);
    });

    // should delete
    it('should delete a direction', function (): void {
        $direction = Direction::factory()->create();
        actingAs($this->user)
            ->call('delete', $direction->id)
            ->assertDispatched('message', 'Direction deleted successfully');
    });
});
