<?php

use App\Models\User;
use function Pest\Laravel\post;

test('login screen can be rendered', function () {
    $this->get('/login')
        ->assertOk()
        ->assertSee('login');
});

test('users can authenticate using the login screen', function () {
    $user = User::factory()->create();

    post('/login', [
        'email' => $user->email,
        'password' => 'password',
    ])
        ->assertRedirect(route('dashboard', absolute: false));

    $this->assertAuthenticated();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    post('/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ])
        ->assertRedirect();

    $this->assertGuest();
});

test('navigation menu can be rendered', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    $this->get('/dashboard')
        ->assertOk()
        ->assertSee('dashboard');
});

test('users can logout', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    post('logout')
        ->assertRedirect('/');

    $this->assertGuest();
});
