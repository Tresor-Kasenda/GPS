<?php

declare(strict_types=1);

use App\Livewire\Entity\Direction\CreateDirection;
use App\Livewire\Entity\Direction\CreateDirectionDivision;
use App\Livewire\Entity\Direction\EditDirection;
use App\Livewire\Entity\Direction\ListsDirection;
use App\Livewire\Entity\Divisions\CreateOffice;
use App\Livewire\Entity\Divisions\EditDivision;
use App\Livewire\Entity\Divisions\ListsDivision;
use App\Livewire\Entity\Grades\CreateGrades;
use App\Livewire\Entity\Grades\EditGrades;
use App\Livewire\Entity\Grades\ListsGrades;
use App\Livewire\Entity\Offices\EditOffice;
use App\Livewire\Entity\Offices\ListsOffice;
use App\Livewire\Entity\Positions\CreatePosition;
use App\Livewire\Entity\Positions\EditPosition;
use App\Livewire\Entity\Positions\ListsPosition;
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
        Route::group(['prefix' => 'direction'], function (): void {
            Route::get('/', ListsDirection::class)->name('lists-direction');
            Route::get('/add', CreateDirection::class)->name('create-direction');
            Route::get('/{direction}/edit', EditDirection::class)->name('edit-direction');
            Route::get('/add/{direction}/division', CreateDirectionDivision::class)->name('division-create');
        });

        Route::group(['prefix' => 'divisions'], function (): void {
            Route::get('/', ListsDivision::class)->name('lists-division');
            Route::get('/{division}/edit', EditDivision::class)->name('edit-division');
            Route::get('/add/{division}/office', CreateOffice::class)->name('create-office');
        });

        Route::group(['prefix' => 'offices'], function (): void {
            Route::get('/', ListsOffice::class)->name('lists-office');
            Route::get('/{office}/edit', EditOffice::class)->name('edit-office');
        });

        Route::group(['prefix' => 'grades'], function () {
            Route::get('/', ListsGrades::class)->name('lists-grades');
            Route::get('/add', CreateGrades::class)->name('create-grades');
            Route::get('/{grade}/edit', EditGrades::class)->name('edit-grades');
        });

        Route::group(['prefix' => 'position'], function () {
            Route::get('/', ListsPosition::class)->name('lists-position');
            Route::get('/add', CreatePosition::class)->name('create-position');
            Route::get('/{position}/edit', EditPosition::class)->name('edit-position');
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
