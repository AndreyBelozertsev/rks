<?php

namespace App\Observers;

use Domain\Seo\Models\Seo;
use Illuminate\Support\Facades\Cache;

class SeoObserver
{
    /**
     * Handle the Seo "saved" event.
     */
    public function saved(Seo $seo): void
    {
        Cache::forget('seo_' . $seo->url);
    }
 
 
    /**
     * Handle the Seo "deleted" event.
     */
    public function deleted(Seo $seo): void
    {
        Cache::forget('seo_' . $seo->url);
    }
}
