<?php

namespace Domain\Attachment\Providers;

use Illuminate\Support\ServiceProvider;

class AttachmentServiceProvider extends ServiceProvider
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
