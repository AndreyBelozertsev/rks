<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\ServiceCategory;


class HomeController extends Controller
{
    public function index(){

        $serviceCategories = Cache::rememberForever('service_categories', function () {
            return ServiceCategory::activeItems()->get();
        }); 
        
        return view('page.home', compact('serviceCategories'));
    }
}
