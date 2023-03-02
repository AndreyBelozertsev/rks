<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Product\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        
    }

    public function show($category, $slug)
    {
        $service = Service::activeItem($slug)->firstOrFail();

        if(view()->exists("page.service.show.$service->view")){
            return view("page.service.show.$service->view", compact('service') );
        }

        return view("page.service.show.default", compact('service') );
    }
}
