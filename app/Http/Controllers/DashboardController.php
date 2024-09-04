<?php

namespace App\Http\Controllers;

use App\Enums\Gender;
use App\Enums\StateCarrier;
use App\Models\Agent;
use App\Models\Hiring;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'homme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::MALE->value))
                ->count(),
            'femme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::FEMALE->value))
                ->count(),
            'totals' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->count(),
            'inactifhomme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::MALE->value))
                ->count(),
            'inactiffemme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::FEMALE->value))
                ->count(),
            'inactiftotals' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->count(),
            'passifhomme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::MALE->value))
                ->count(),
            'passiffemme' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->whereHas('person', fn($query) => $query->where('gender', Gender::FEMALE->value))
                ->count(),
            'passiftotals' => Agent::query()
                ->where('status', StateCarrier::ACTIVE->value)
                ->count(),
        ]);
    }


}
