<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Case\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show($slug)
    {
        $portfolio = Portfolio::portfolio($slug)->firstOrFail();

        return view('page.portfolio.show',compact('portfolio'));
    }
}
