<?php

namespace App\View\Composers;


use Illuminate\View\View;
use Domain\Setting\Models\Setting;
use Illuminate\Support\Facades\Cache;

class CookieComposer
{


    protected function getData()
    {
        return Cache::rememberForever('setting.cookie-text', function (){
            return Setting::where('key','cookie')->pluck('value')->first() ?? false;
        });
    }

    public function compose(View $view): void
    {
        $view->with('cookie_text',$this->getData());
    }

}
