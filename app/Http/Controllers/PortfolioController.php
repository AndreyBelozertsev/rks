<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Case\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show($slug)
    {
        $portfolio = Portfolio::activeItem($slug)->firstOrFail();

        if(view()->exists("page.portfolio.show.$portfolio->view")){
            return view("page.portfolio.show.$portfolio->view", compact('portfolio') );
        }

        return view('page.portfolio.show.default',compact('portfolio'));
    }
}
