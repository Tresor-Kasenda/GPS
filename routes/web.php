<?php

declare(strict_types=1);

use App\Livewire\Pages\Experiences\CreateExperience;
use App\Livewire\Pages\Experiences\ListsExperience;
use App\Livewire\Pages\Persons\Hirings\CreateHirings;
use App\Livewire\Pages\Persons\Hirings\EditHirings;
use App\Livewire\Pages\Persons\Hirings\ListsHirings;
use App\Livewire\Pages\Persons\Users\CreatePhysicPerson;
use App\Livewire\Pages\Persons\Users\EditPhysicPerson;
use App\Livewire\Pages\Persons\Users\HiringPhysicPerson;
use App\Livewire\Pages\Persons\Users\ListsPhysicPerson;
use App\Livewire\Pages\Persons\Users\ShowPhysicPerson;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function (): void {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::group(['prefix' => 'persons', 'as' => 'persons.'], function (): void {

        Route::group(['prefix' => 'users'], function (): void {
            Route::get('/', ListsPhysicPerson::class)->name('lists-physic-person');
            Route::get('/add', CreatePhysicPerson::class)->name('add-physic-person');
            Route::get('/{person}/edit', EditPhysicPerson::class)->name('edit-physic-person');
            Route::get('/{person}/show', ShowPhysicPerson::class)->name('show-physic-person');
            Route::get('/{person}/hiring', HiringPhysicPerson::class)->name('hiring-physic-person');
        });

        Route::group(['prefix' => 'experience'], function () {
            Route::get('/', ListsExperience::class)->name('lists-experience');
            Route::get('/{person}/experience', CreateExperience::class)->name('create-experience');
        });

    });

    Route::group(['prefix' => 'engagement', 'as' => 'engagement.'], function (): void {
        Route::group(['prefix' => 'hiring'], function (): void {
            Route::get('/', ListsHirings::class)->name('lists-hiring');
            Route::get('/add', CreateHirings::class)->name('create-hiring');
            Route::get('/{hiring}/edit', EditHirings::class)->name('edit-hiring');
        });
    });
});

require __DIR__ . '/auth.php';
