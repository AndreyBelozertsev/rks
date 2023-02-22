<?php

namespace App\Observers;

use Illuminate\Support\Facades\Cache;
use Domain\Product\Models\DevelopmentStage;

class DevelopmentStageObserver
{
    /**
     * Handle the DevelopmentStage "saved" event.
     */
    public function saved(DevelopmentStage $developmentStage): void
    {
        Cache::forget('development_stages');
    }
 
 
    /**
     * Handle the DevelopmentStage "deleted" event.
     */
    public function deleted(DevelopmentStage $developmentStage): void
    {
        Cache::forget('development_stages');
    }
}
