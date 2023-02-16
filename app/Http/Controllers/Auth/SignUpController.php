<?php

namespace App\Http\Controllers\Auth;

use Domain\Auth\DTOs\NewUserDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpFormRequest;
use Domain\Auth\Contracts\RegisterNewUserContract;


class SignUpController extends Controller
{

    public function page(){
        return view('auth.sign-up');
    } 

    public function handle(SignUpFormRequest $request, RegisterNewUserContract $action){
    
        $action(NewUserDTO::fromRequest($request));

        return redirect()->route('home');
    }

}
 