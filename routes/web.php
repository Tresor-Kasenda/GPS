<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Pages\Engagements\Admissions\CreateAdmissions;
use App\Livewire\Pages\Engagements\Admissions\EditAdmissions;
use App\Livewire\Pages\Engagements\Admissions\ListsAdmissions;
use App\Livewire\Pages\Engagements\Assignments\CreateAssignments;
use App\Livewire\Pages\Engagements\Assignments\EditAssignments;
use App\Livewire\Pages\Engagements\Assignments\ListsAssignments;
use App\Livewire\Pages\Engagements\Hirings\CreateHirings;
use App\Livewire\Pages\Engagements\Hirings\EditHirings;
use App\Livewire\Pages\Engagements\Hirings\ListsHirings;
use App\Livewire\Pages\Engagements\Hirings\ShowHirings;
use App\Livewire\Pages\Engagements\ListsEngagements;
use App\Livewire\Pages\Engagements\Persons\CreatePersons;
use App\Livewire\Pages\Engagements\Persons\EditPersons;
use App\Livewire\Pages\Engagements\Persons\ListsPersons;
use App\Livewire\Pages\Engagements\Persons\ShowPersons;
use App\Livewire\Pages\Entities\Directions\CreateDirections;
use App\Livewire\Pages\Entities\Directions\EditDirections;
use App\Livewire\Pages\Entities\Directions\ListsDirections;
use App\Livewire\Pages\Entities\Divisions\CreateDivisions;
use App\Livewire\Pages\Entities\Divisions\EditDivisions;
use App\Livewire\Pages\Entities\Divisions\ListsDivisions;
use App\Livewire\Pages\Entities\Grades\CreateGrades;
use App\Livewire\Pages\Entities\Grades\EditGrades;
use App\Livewire\Pages\Entities\Grades\ListsGrades;
use App\Livewire\Pages\Entities\ListsEntities;
use App\Livewire\Pages\Entities\Offices\CreateOffices;
use App\Livewire\Pages\Entities\Offices\EditOffices;
use App\Livewire\Pages\Entities\Offices\ListsOffices;
use App\Livewire\Pages\Entities\Positions\CreatePositions;
use App\Livewire\Pages\Entities\Positions\EditPositions;
use App\Livewire\Pages\Entities\Positions\ListsPositions;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'entities'], function () {
        Route::get('/', ListsEntities::class)->name('entities-lists');

        Route::group(['prefix' => 'directions'], function () {
            Route::get('/', ListsDirections::class)->name('directions');
            Route::get('/add', CreateDirections::class)->name('add-direction');
            Route::get('/{direction}/edit', EditDirections::class)->name('edit-direction');
        });

        Route::group(['prefix' => 'divisions'], function () {
            Route::get('/', ListsDivisions::class)->name('divisions');
            Route::get('/add', CreateDivisions::class)->name('add-division');
            Route::get('/{division}/edit', EditDivisions::class)->name('edit-division');
        });

        Route::group(['prefix' => 'offices'], function () {
            Route::get('/', ListsOffices::class)->name('offices');
            Route::get('/add', CreateOffices::class)->name('add-office');
            Route::get('/{office}/edit', EditOffices::class)->name('edit-office');
        });

        Route::group(['prefix' => 'grades'], function () {
            Route::get('/', ListsGrades::class)->name('grades');
            Route::get('/add', CreateGrades::class)->name('add-grade');
            Route::get('/{grade}/edit', EditGrades::class)->name('edit-grade');
        });

        Route::group(['prefix' => 'positions'], function () {
            Route::get('/', ListsPositions::class)->name('positions');
            Route::get('/add', CreatePositions::class)->name('add-position');
            Route::get('/{position}/edit', EditPositions::class)->name('edit-position');
        });
    });

    Route::group(['prefix' => 'engagements'], function () {
        Route::get('/', ListsEngagements::class)->name('engagements-lists');

        Route::group(['prefix' => 'persons'], function () {
            Route::get('/', ListsPersons::class)->name('persons');
            Route::get('/add', CreatePersons::class)->name('add-person');
            Route::get('/{person}/show', ShowPersons::class)->name('show-person');
            Route::get('/{person}/edit', EditPersons::class)->name('edit-person');
        });

        Route::group(['prefix' => 'hiring'], function () {
            Route::get('/', ListsHirings::class)->name('hirings');
            Route::get('/add', CreateHirings::class)->name('add-hiring');
            Route::get('/{hiring}/edit', EditHirings::class)->name('edit-hiring');
        });

        Route::group(['prefix' => 'attributions'], function () {
            Route::get('/', ListsAssignments::class)->name('assignments');
            Route::get('/add', CreateAssignments::class)->name('add-assignment');
            Route::get('/{assignment}/edit', EditAssignments::class)->name('edit-assignment');
        });

        Route::group(['prefix' => 'admissionSub'], function () {
            Route::get('/', ListsAdmissions::class)->name('admissions');
            Route::get('/add', CreateAdmissions::class)->name('add-admission');
            Route::get('/{admission}/edit', EditAdmissions::class)->name('edit-admission');
        });
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
