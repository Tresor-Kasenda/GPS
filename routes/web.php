<?php

declare(strict_types=1);

use App\Livewire\Entity\Direction\CreateDirection;
use App\Livewire\Entity\Direction\ListsDirection;
use App\Livewire\Pages\Experiences\CreateExperience;
use App\Livewire\Pages\Experiences\ListsExperience;
use App\Livewire\Pages\Persons\Hirings\CreateHiring;
use App\Livewire\Pages\Persons\Hirings\EditHiring;
use App\Livewire\Pages\Persons\Hirings\ListsHiring;
use App\Livewire\Pages\Persons\Qualifications\CreateQualifications;
use App\Livewire\Pages\Persons\Qualifications\ListsQualifications;
use App\Livewire\Pages\Persons\Users\CreatePhysicPerson;
use App\Livewire\Pages\Persons\Users\EditPhysicPerson;
use App\Livewire\Pages\Persons\Users\HiringPhysicPerson;
use App\Livewire\Pages\Persons\Users\ListsPhysicPerson;
use App\Livewire\Pages\Persons\Users\ShowPhysicPerson;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function (): void {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::group(['prefix' => 'entity', 'as' => 'entity.'], function (): void {
        Route::group(['prefix' => 'direction'], function () {
            Route::get('/', ListsDirection::class)->name('lists-direction');
            Route::get('/add', CreateDirection::class)->name('create-direction');
        });
    });

    Route::group(['prefix' => 'persons', 'as' => 'persons.'], function (): void {

        Route::group(['prefix' => 'users'], function (): void {
            Route::get('/', ListsPhysicPerson::class)->name('lists-physic-person');
            Route::get('/add', CreatePhysicPerson::class)->name('add-physic-person');
            Route::get('/{person}/edit', EditPhysicPerson::class)->name('edit-physic-person');
            Route::get('/{person}/show', ShowPhysicPerson::class)->name('show-physic-person');
            Route::get('/{person}/hiring', HiringPhysicPerson::class)->name('hiring-physic-person');
        });

        Route::group(['prefix' => 'experience'], function (): void {
            Route::get('/', ListsExperience::class)->name('lists-experience');
            Route::get('/{person}/add', CreateExperience::class)->name('create-experience');
        });

        Route::group(['prefix' => 'qualification'], function (): void {
            Route::get('/', ListsQualifications::class)->name('lists-qualifications');
            Route::get('/{person}/add', CreateQualifications::class)->name('create-qualifications');
        });
    });

    Route::group(['prefix' => 'engagement', 'as' => 'engagement.'], function (): void {
        Route::group(['prefix' => 'hiring'], function (): void {
            Route::get('/', ListsHiring::class)->name('lists-hiring');
            Route::get('/add', CreateHiring::class)->name('create-hiring');
            Route::get('/{hiring}/edit', EditHiring::class)->name('edit-hiring');
        });
    });

    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function (): void {

    });
});

require __DIR__ . '/auth.php';
