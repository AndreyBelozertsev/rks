<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\DevelopmentStage;

class DevelopmentStageController extends Controller
{
    public function show($slug)
    {
        $developmentStage = DevelopmentStage::activeItem($slug)->firstOrFail();

        return view('page.development-stage.show', compact('developmentStage'));
    }
}