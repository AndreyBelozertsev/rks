<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index()
    {

        $serviceCategories = Cache::rememberForever('service_categories', function () {
            return ServiceCategory::serviceCategories()->get();
        });  

        return view( 'page.service-category.index', compact('serviceCategories') );
    }

    public function show($slug)
    {

        $serviceCategory = ServiceCategory::serviceCategory($slug)->firstOrFail();

        if(view()->exists("page.service-category.categories.$slug")){
            return view("page.service-category.categories.$slug", compact('serviceCategory') );
        }
        
        return view( 'page.service-category.categories.default', compact('serviceCategory') );
    }
}
