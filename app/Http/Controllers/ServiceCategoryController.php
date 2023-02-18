<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $serviceCategories = ServiceCategory::serviceCategories()->get();

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
