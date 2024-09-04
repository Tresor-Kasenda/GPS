<?php

namespace App\Http\Controllers\Pages;

use App\Models\MobilityAgent;

class DeleteAMobilityController
{
    public function __invoke(MobilityAgent $mobility)
    {
        $mobility->delete();

        return redirect()->route('agent.mobility-lists');
    }
}
