<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Hiring;
use Illuminate\Http\Request;

class DeleteHiringController extends Controller
{
    public function __invoke(Hiring $hiring)
    {
        $hiring->delete();

        return redirect()->route('persons.lists-hirings');
    }
}
