<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Domain\Seo\Providers\SeoServiceProvider;
use Domain\Auth\Providers\AuthServiceProvider;
use Domain\Case\Providers\CaseServiceProvider;
use Domain\Page\Providers\PageServiceProvider;
use Domain\Post\Providers\PostServiceProvider;
use Domain\Product\Providers\ProductServiceProvider;
use Domain\Setting\Providers\SettingServiceProvider;
use Domain\Vacancy\Providers\VacancyServiceProvider;
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
            AuthServiceProvider::class
        );

        $this->app->register(
            CaseServiceProvider::class
        );

        $this->app->register(
            CustomerServiceProvider::class
        );

        $this->app->register(
            PageServiceProvider::class
        );

        $this->app->register(
            PostServiceProvider::class
        );

        $this->app->register(
            ProductServiceProvider::class
        );

        $this->app->register(
            SeoServiceProvider::class
        );

        $this->app->register(
            SettingServiceProvider::class
        );

        $this->app->register(
            VacancyServiceProvider::class
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
