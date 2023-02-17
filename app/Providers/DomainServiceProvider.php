<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Auth\Providers\AuthServiceProvider;
use Domain\Case\Providers\CaseServiceProvider;
use Domain\Post\Providers\PostServiceProvider;
use Domain\Setting\Providers\SettingServiceProvider;
use Domain\Customer\Providers\CustomerServiceProvider;

class DomainServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->register(
            AuthServiceProvider::class,
            CaseServiceProvider::class,
            CustomerServiceProvider::class,
            PostServiceProvider::class,
            ProductServiceProvider::class,
            SeoServiceProvider::class,
            SettingServiceProvider::class,
        );

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
