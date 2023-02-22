<?php

namespace App\Observers;

use Domain\Product\Models\Service;
use Illuminate\Support\Facades\Cache;

class ServiceObserver
{
    /**
     * Handle the Service "saved" event.
     */
    public function saved(Service $service): void
    {
        Cache::forget('service_categories');
        Cache::forget('service_categories_inputs');
    }
 
 
    /**
     * Handle the Service "deleted" event.
     */
    public function deleted(Service $service): void
    {
        Cache::forget('service_categories');
        Cache::forget('service_categories_inputs');
    }
}
