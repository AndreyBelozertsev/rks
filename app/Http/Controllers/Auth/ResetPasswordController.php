<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Requests\Auth\ResetPasswordFormRequest;


class ResetPasswordController extends Controller
{
    
    public function page($token){
        
        return view('auth.reset-password', ['token' => $token]);
    }

    public function handle(ResetPasswordFormRequest $request) {
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => bcrypt($password)
                ])->setRememberToken(str()->random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
        
        if($status === Password::PASSWORD_RESET){
            flash()->info(__($status));
            return redirect()->route('login');
        }
        
        return back()->withErrors(['email' => __($status)]);
    }
}
 