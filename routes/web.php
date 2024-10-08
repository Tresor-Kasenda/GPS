<?php

declare(strict_types=1);

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Pages\DeleteAffectationController;
use App\Http\Controllers\Pages\DeleteAgentController;
use App\Http\Controllers\Pages\DeleteAMobilityController;
use App\Http\Controllers\Pages\DeleteHiringController;
use App\Http\Controllers\Pages\DeletePromotionController;
use App\Http\Controllers\Pages\DeleteTransferController;
use App\Http\Controllers\Pages\Persons\DeletePersonController;
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
use App\Livewire\Pages\Agents\ShowAgents;
use App\Livewire\Pages\EndCarrier\CreateEndCarriers;
use App\Livewire\Pages\EndCarrier\EditEndCarriers;
use App\Livewire\Pages\EndCarrier\ListsEndCarriers;
use App\Livewire\Pages\EndCarrier\ListsEndDeceased;
use App\Livewire\Pages\EndCarrier\ListsEndDesignation;
use App\Livewire\Pages\EndCarrier\ListsEndRevoked;
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
use App\Livewire\Pages\Promotions\CreatePromotions;
use App\Livewire\Pages\Promotions\EditPromotions;
use App\Livewire\Pages\Promotions\ListsPromotions;
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

    Route::get('dashboard', DashboardController::class)->name('dashboard');

    Route::group(['prefix' => 'agents', 'as' => 'agent.'], function () {

        Route::group(['prefix' => 'agent'], function () {
            Route::get('/', ListsAgents::class)->name('agents-lists');
            Route::get('/{agent}/detail', ShowAgents::class)->name('show-agents');
            Route::get('/{agent}/hiring', EditAgents::class)->name('agents-edit');
            Route::delete('/{agent}/delete', DeleteAgentController::class)->name('delete-agent');
        });

        Route::group(['prefix' => 'affectation'], function () {
            Route::get('/', ListsAffectations::class)->name('affectations-lists');
            Route::get('/{agent}/affectation/create', AgentAffectation::class)->name('agent-affectation');
            Route::get('/{affectation}/agent/edit', EditAgentAffectation::class)->name('affectation-agent-edit');
            Route::delete('/{affectation}/delete', DeleteAffectationController::class)->name('delete-affectation');
        });

        Route::group(['prefix' => 'mobility'], function () {
            Route::get('/', ListsMobility::class)->name('mobility-lists');
            Route::get('/{agent}/mobility/create', CreateMobility::class)->name('mobility-create');
            Route::get('/{mobility}/agent/edit', EditMobility::class)->name('mobility-edit');
            Route::delete('/{mobility}/delete', DeleteAMobilityController::class)->name('delete-mobility');
        });

        Route::group(['prefix' => 'transfer'], function () {
            Route::get('/', ListsTransfers::class)->name('lists-transfers');
            Route::get('/{agent}/transfer/create', CreateTransfers::class)->name('create-transfers');
            Route::get('/{transfer}/transfer/edit', EditTransfers::class)->name('edit-transfers');
            Route::delete('/{transfer}/delete', DeleteTransferController::class)->name('delete-transfer');
        });

        Route::group(['prefix' => 'promotion'], function () {
            Route::get('/', ListsPromotions::class)->name('lists-promotions');
            Route::get('/{agent}/promotion/create', CreatePromotions::class)->name('create-promotions');
            Route::get('/{promotion}/promotion/edit', EditPromotions::class)->name('edit-promotions');
            Route::delete('/{promotion}/delete', DeletePromotionController::class)->name('delete-promotion');
        });

        Route::group(['prefix' => 'fin-carriers'], function () {
            Route::get('/retired', ListsEndCarriers::class)->name('lists-end-carriers');
            Route::get('/deces', ListsEndDeceased::class)->name('lists-end-deceased');
            Route::get('/revocation', ListsEndRevoked::class)->name('lists-end-revoked');
            Route::get('/demission', ListsEndDesignation::class)->name('lists-end-designation');
            Route::get('/{agent}/carriers/create', CreateEndCarriers::class)->name('carriers-end-create');
            Route::get('/{career}/carriers/edit', EditEndCarriers::class)->name('edit-end-carriers');
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
            Route::delete('/{hiring}/delete', DeleteHiringController::class)->name('delete-hiring');
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


    Route::delete('/{person}/delete', DeletePersonController::class)->name('delete-physic-person');
});

require __DIR__ . '/auth.php';
