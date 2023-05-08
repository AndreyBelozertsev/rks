<?php

namespace Domain\Vacancy\Providers;

use Illuminate\Support\ServiceProvider;

class VacancyServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

    }

    public function register(): void
    {
        $this->app->register(
            ActionsServiceProvider::class
        );
    }
}
