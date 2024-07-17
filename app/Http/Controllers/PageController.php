<?php

namespace App\Http\Controllers;

use Domain\Page\Models\Page;
use Illuminate\Http\Request;
use Services\Bitrix24\CRest;

class PageController extends Controller
{
    public function show($slug = '/'){

        if($page = Page::activeItem($slug)->first()){
  
            if(view()->exists("page.$page->template")){
                return view("page.$page->template", compact('page') );
            }

            return view('page.default', compact('page'));
        }
        abort(404);
    }
}
