<?php

namespace Domain\Post\Providers;

use Illuminate\Support\ServiceProvider;




class PostServiceProvider extends ServiceProvider
{
    public function register():void
    {
        $this->app->register(
            ActionsServiceProvider::class
        );
    }

}