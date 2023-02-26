<?php

namespace App\View\Composers;


use Illuminate\View\View;
use Domain\Setting\Models\Setting;
use Illuminate\Support\Facades\Cache;

class ContactComposer
{

    protected $fields = [
        'organization', 
        'city', 
        'street',
        'building',
        'office',
        'coordinates',
        'email', 
        'phone1',
        'phone2', 
        'telegram', 
        'work_days',
        'work_time',
        'vk'
    ];


    protected function getData()
    {
        $fields = $this->fields;
        return Cache::rememberForever('setting.contacts', function () use($fields) {
            return Setting::whereIn('key',$fields)->pluck('value', 'key');
        });
    }

    public function compose(View $view): void
    {
        $view->with('contacts',$this->getData());
    }

}
