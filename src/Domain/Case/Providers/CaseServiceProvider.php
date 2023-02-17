<?php

namespace Domain\Case\Providers;

use Illuminate\Support\ServiceProvider;

class CaseServiceProvider extends ServiceProvider
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
