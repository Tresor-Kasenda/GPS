<?php

use App\Livewire\Entity\Divisions\ListsDivision;
use App\Models\Division;
use App\Models\User;

beforeEach(function () {
    $this->actingAs(User::factory()->create());
});

it('displays divisions when they exist', function () {
    $division = Division::factory()->create();

    Livewire::test(ListsDivision::class)
        ->assertSee($division->designation);
});

it('does not display divisions when they do not exist', function () {
    Livewire::test(ListsDivision::class)
        ->assertDontSee('Division A');
});

it('displays divisions in descending order of creation', function () {
    $divisionA = Division::factory()->create(['created_at' => now()->subDay()]);
    $divisionB = Division::factory()->create(['created_at' => now()]);

    Livewire::test(ListsDivision::class)
        ->assertSeeInOrder([$divisionB->designation, $divisionA->designation]);
});
