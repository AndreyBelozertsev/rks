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
        $service = Service::service($slug)->firstOrFail();

        return view('page.service.show',compact('service'));
    }
}
