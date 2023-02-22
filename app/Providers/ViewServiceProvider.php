<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use App\View\Composers\CookieComposer;
use App\View\Composers\ContactComposer;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\NavigationComposer;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', NavigationComposer::class);
        View::composer('*', ContactComposer::class);
        View::composer('*',CookieComposer::class);
    }
}
