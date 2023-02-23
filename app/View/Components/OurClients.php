<?php

namespace App\View\Components;

use Closure;
use Domain\Case\Models\Client;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class OurClients extends Component
{
    protected function getData(){
        return Cache::rememberForever('our_clients', function () {
            return Client::activeItems()->get();
        });   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.our-clients', ['clients' => $this->getData()] );
    }
}
