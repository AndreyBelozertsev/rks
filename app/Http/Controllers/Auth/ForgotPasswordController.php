<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\Auth\ForgotPasswordFormRequest;


class ForgotPasswordController extends Controller
{
    
    public function page(){
        return view('auth.forgot-password');
    }

    public function handle(ForgotPasswordFormRequest $request){
        
            $request->validated();
         
            $status = Password::sendResetLink(
                $request->only('email')
            );

            if($status === Password::RESET_LINK_SENT){
                flash()->info(__($status));
                return back();
            }

            return back()->withErrors(['email' => __($status)]);
    }
}
 