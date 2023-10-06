<?php

namespace App\Providers;

use App\Http\Kernel;
use Carbon\CarbonInterval;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {


        if(app()->isProduction()){
       
            app(Kernel::class)->whenRequestLifecycleIsLongerThan(
                CarbonInterval::seconds(4),
                function(){
                    logger()
                        ->channel('telegram')
                        ->debug('whenRequestLifecycleIsLongerThan'.request()->url());
                }
            );

        }



        Str::macro('phoneNumber', function ($string) {
            return preg_replace('/^8{1}/', '7', preg_replace('/[^0-9]/', '', $string));
        });
    }
}
