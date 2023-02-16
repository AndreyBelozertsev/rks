<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \Domain\Setting\Models\Navigation::class => 'App\Http\Sections\Navigation',
        \Domain\Setting\Models\Setting::class => 'App\Http\Sections\Setting',
        \Domain\Post\Models\Post::class => 'App\Http\Sections\Post',
        \Domain\Post\Models\PostCategory::class => 'App\Http\Sections\PostCategory',
        \Domain\Auth\Models\User::class => 'App\Http\Sections\Users',
        \Domain\Seo\Models\Seo::class => 'App\Http\Sections\Seo',
        \Domain\Customer\Models\Customer::class => 'App\Http\Sections\Customer',
    ];

    protected $widgets = [
        \App\Widgets\Logout::class,
        \App\Widgets\Dashboard::class,
    ];

    /**
     * Register sections.
     *
     * @param \SleepingOwl\Admin\Admin $admin
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
         // Регистрация виджетов в реестре
        /** @var WidgetsRegistryInterface $widgetsRegistry */
        $widgetsRegistry = $this->app[\SleepingOwl\Admin\Contracts\Widgets\WidgetsRegistryInterface::class];
 
        foreach ($this->widgets as $widget) {
            $widgetsRegistry->registerWidget($widget);
        }

        parent::boot($admin);
    }
}
