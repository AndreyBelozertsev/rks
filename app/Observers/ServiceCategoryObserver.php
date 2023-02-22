<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\ServiceCategory;

class ServiceCategoryObserver
{
    /**
     * Handle the ServiceCategory "saved" event.
     */
    public function saved(ServiceCategory $serviceCategory): void
    {
        Cache::forget('service_categories');
        Cache::forget('service_categories_inputs');
        Cache::forget('service_categories_with_additional');
    }
 
 
    /**
     * Handle the ServiceCategory "deleted" event.
     */
    public function deleted(ServiceCategory $serviceCategory): void
    {
        Cache::forget('service_categories');
        Cache::forget('service_categories_inputs');
        Cache::forget('service_categories_with_additional');
    }
}
