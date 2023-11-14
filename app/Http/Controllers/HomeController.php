<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
//     public function index(){

//         return view('page.home', compact('serviceCategories'));
//     }

    public function video($slug){
        if(Storage::disk('public')->exists("video/$slug")){
            $data = config('sport.' . Str::remove('.', $slug));
            return view("page.video.show",compact('slug','data'));
        }
        return abort(404);
    }

    // public function getFeedback(){
 
    //     return view('page.get_feedback');
    // }


}
