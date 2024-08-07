<?php

declare(strict_types=1);

use App\Livewire\Entity\Offices\ListsOffice;
use App\Models\Division;
use App\Models\Office;
use App\Models\User;

beforeEach(function (): void {
    $this->actingAs(User::factory()->create());
});

it('displays offices when they exist', function (): void {
    $division = Division::factory()->create();
    $office = Office::factory()->create(['division_id' => $division->id]);

    Livewire::test(ListsOffice::class)
        ->assertSee($office->designation);
});

it('does not display offices when they do not exist', function (): void {
    Livewire::test(ListsOffice::class)
        ->assertDontSee('Office A');
});

it('displays offices in descending order of creation', function (): void {
    $division = Division::factory()->create();
    $officeA = Office::factory()->create(['division_id' => $division->id, 'created_at' => now()->subDay()]);
    $officeB = Office::factory()->create(['division_id' => $division->id, 'created_at' => now()]);

    Livewire::test(ListsOffice::class)
        ->assertSeeInOrder([$officeB->designation, $officeA->designation]);
});
