<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Case\Models\Portfolio;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::activeItems()->paginate(12)->withQueryString();

        return view("page.portfolio.index", compact('portfolios') ); 

    }


    public function show($slug)
    {
        $portfolio = Portfolio::activeItem($slug)->firstOrFail();

        if(view()->exists("page.portfolio.show.$portfolio->view")){
            return view("page.portfolio.show.$portfolio->view", compact('portfolio') );
        }

        return view('page.portfolio.show.default',compact('portfolio'));
    }
}
