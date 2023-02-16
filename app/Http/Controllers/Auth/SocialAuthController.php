<?php

namespace App\Http\Controllers\Auth;

use Throwable;

use DomainException;
use Domain\Auth\Models\User;
use Support\SessionRegenerator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    public function redirect(string $driver){
        try{
            return Socialite::driver($driver)->redirect();
        }catch(Throwable $e){
            throw new DomainException('произошла ошибка или драйвер не поддерживается ');
        }
        
    }

    public function callback(string $driver){
        if($driver != 'github'){
            throw new DomainException('произошла ошибка или драйвер не поддерживается ');
        }
    
        $githubUser = Socialite::driver($driver)->user();
        
        $user = User::query()->updateOrCreate([
                'provider_id' => $githubUser->getId(),
                'provider' => $driver
            ],
            [
                'name' => $githubUser->getName() ? $githubUser->getName() : $githubUser->getNickname(),
                'email'=> $githubUser->getEmail(),
                'password'=> bcrypt(str()->random(20)),
        ]);

        SessionRegenerator::run(fn()=>auth()->login($user));
 
        return redirect()->intended(route('home'));
        
    }
}
