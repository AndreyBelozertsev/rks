<?php

namespace App\Observers;

use Domain\Case\Models\Client;
use Illuminate\Support\Facades\Cache;

class ClientObserver
{
    /**
     * Handle the Client "saved" event.
     */
    public function saved(Client $client): void
    {
        Cache::forget('our_clients');
    }
 
 
    /**
     * Handle the Client "deleted" event.
     */
    public function deleted(Client $client): void
    {
        Cache::forget('our_clients');
    }
}
