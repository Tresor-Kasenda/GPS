<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;

class DeleteAgentController extends Controller
{
    public function __invoke(Agent $agent)
    {
        $agent->delete();

        return redirect()->route('agent.agents-lists');
    }
}
