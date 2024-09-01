<?php

declare(strict_types=1);

use App\Livewire\Entity\Functions\CreateFunction;
use App\Livewire\Entity\Functions\EditFunction;
use App\Livewire\Entity\Functions\ListsFunctions;
use App\Livewire\Entity\Grades\CreateGrades;
use App\Livewire\Entity\Grades\EditGrades;
use App\Livewire\Entity\Grades\ListsGrades;
use App\Livewire\Entity\Services\CreateService;
use App\Livewire\Entity\Services\EditService;
use App\Livewire\Entity\Services\ListsServices;
use App\Livewire\Pages\Affectations\AgentAffectation;
use App\Livewire\Pages\Affectations\EditAgentAffectation;
use App\Livewire\Pages\Affectations\ListsAffectations;
use App\Livewire\Pages\Agents\EditAgents;
use App\Livewire\Pages\Agents\ListsAgents;
use App\Livewire\Pages\Mobility\CreateMobility;
use App\Livewire\Pages\Mobility\EditMobility;
use App\Livewire\Pages\Mobility\ListsMobility;
use App\Livewire\Pages\Persons\Hirings\CreateHirings;
use App\Livewire\Pages\Persons\Hirings\EditHirings;
use App\Livewire\Pages\Persons\Hirings\ListsHirings;
use App\Livewire\Pages\Persons\Users\CreatePhysicPerson;
use App\Livewire\Pages\Persons\Users\EditPhysicPerson;
use App\Livewire\Pages\Persons\Users\HiringPhysicPerson;
use App\Livewire\Pages\Persons\Users\ListsPhysicPerson;
use App\Livewire\Pages\Persons\Users\ShowPhysicPerson;
use App\Livewire\Pages\Transfers\CreateTransfers;
use App\Livewire\Pages\Transfers\EditTransfers;
use App\Livewire\Pages\Transfers\ListsTransfers;
use App\Livewire\Settings\Setting;
use App\Livewire\Settings\Users\CreateUsers;
use App\Livewire\Settings\Users\EditUsers;
use App\Livewire\Settings\Users\ListsUsers;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function (): void {

    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::group(['prefix' => 'agents', 'as' => 'agent.'], function () {
        Route::group(['prefix' => 'agent'], function () {
            Route::get('/', ListsAgents::class)->name('agents-lists');
            Route::get('/{agent}/hiring', EditAgents::class)->name('agents-edit');
        });

        Route::group(['prefix' => 'affectation'], function () {
            Route::get('/', ListsAffectations::class)->name('affectations-lists');
            Route::get('/{agent}/affectation/create', AgentAffectation::class)->name('agent-affectation');
            Route::get('/{affectation}/agent/edit', EditAgentAffectation::class)->name('affectation-agent-edit');
        });


        Route::group(['prefix' => 'mobility'], function () {
            Route::get('/', ListsMobility::class)->name('mobility-lists');
            Route::get('/{agent}/mobility/create', CreateMobility::class)->name('mobility-create');
            Route::get('/{mobility}/agent/edit', EditMobility::class)->name('mobility-edit');
        });

        Route::group(['prefix' => 'transfer'], function () {
            Route::get('/', ListsTransfers::class)->name('lists-transfers');
            Route::get('/{agent}/transfer/create', CreateTransfers::class)->name('create-transfers');
            Route::get('/{mobility}/transfer/edit', EditTransfers::class)->name('edit-transfers');
        });
    });

    Route::group(['prefix' => 'entity', 'as' => 'entity.'], function (): void {

        Route::group(['prefix' => 'services'], function () {
            Route::get('/', ListsServices::class)->name('services-lists');
            Route::get('/create', CreateService::class)->name('create-service');
            Route::get('/{service}/edit', EditService::class)->name('edit-service');
        });

        Route::group(['prefix' => 'grades'], function (): void {
            Route::get('/', ListsGrades::class)->name('lists-grades');
        });

        Route::group(['prefix' => 'functions'], function () {
            Route::get('/', ListsFunctions::class)->name('functions-lists');
            Route::get('/create', CreateFunction::class)->name('create-function');
            Route::get('/{function}/edit', EditFunction::class)->name('edit-function');
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

        Route::group(['prefix' => 'hiring'], function (): void {
            Route::get('/', ListsHirings::class)->name('lists-hirings');
            Route::get('/add', CreateHirings::class)->name('create-hirings');
            Route::get('/{hiring}/edit', EditHirings::class)->name('edit-hirings');
        });
    });


    Route::group(['prefix' => 'settings', 'as' => 'settings.'], function (): void {

        Route::get('/settings', Setting::class)->name('index');

        Route::group(['prefix' => 'users', 'as' => 'users.'], function (): void {
            Route::get('/', ListsUsers::class)->name('lists');
            Route::get('/create', CreateUsers::class)->name('create');
            Route::get('/{user}/edit', EditUsers::class)->name('edit');
        });
    });
});

require __DIR__ . '/auth.php';
