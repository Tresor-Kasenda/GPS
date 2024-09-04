<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\LevelAttribution;
use Illuminate\Http\Request;

class DeletePromotionController extends Controller
{
    public function __invoke(LevelAttribution $promotion)
    {
        $promotion->delete();

        return redirect()->route('agent.lists-promotions');
    }
}
