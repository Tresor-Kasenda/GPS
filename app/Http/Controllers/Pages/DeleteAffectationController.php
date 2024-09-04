<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Affectation;
use Illuminate\Http\Request;

class DeleteAffectationController extends Controller
{
    public function __invoke(Affectation $affectation)
    {
        $affectation->delete();

        return redirect()->route('agent.affectations-lists');
    }
}
