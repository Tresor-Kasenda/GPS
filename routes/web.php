<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Pages\Entities\Directions\CreateDirections;
use App\Livewire\Pages\Entities\Directions\EditDirections;
use App\Livewire\Pages\Entities\Directions\ListsDirections;
use App\Livewire\Pages\Entities\Divisions\CreateDivisions;
use App\Livewire\Pages\Entities\Divisions\EditDivisions;
use App\Livewire\Pages\Entities\Divisions\ListsDivisions;
use App\Livewire\Pages\Entities\ListsEntities;
use App\Livewire\Pages\Entities\Offices\CreateOffices;
use App\Livewire\Pages\Entities\Offices\EditOffices;
use App\Livewire\Pages\Entities\Offices\ListsOffices;
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

    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
