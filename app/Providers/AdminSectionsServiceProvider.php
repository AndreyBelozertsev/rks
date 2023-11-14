<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;
use Domain\Customer\Models\Client;

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
        \Domain\Seo\Models\SeoDownload::class => 'App\Http\Sections\SeoDownload',
        \Domain\Customer\Models\Customer::class => 'App\Http\Sections\Customer',
        \Domain\Product\Models\Service::class => 'App\Http\Sections\Service',
        \Domain\Product\Models\AdditionalService::class => 'App\Http\Sections\AdditionalService',
        \Domain\Product\Models\ServiceCategory::class => 'App\Http\Sections\ServiceCategory',
        \Domain\Product\Models\DevelopmentStage::class => 'App\Http\Sections\DevelopmentStage',
        \Domain\Case\Models\Portfolio::class => 'App\Http\Sections\Portfolio',
        \Domain\Case\Models\PortfolioCategory::class => 'App\Http\Sections\PortfolioCategory',
        \Domain\Case\Models\Client::class => 'App\Http\Sections\Client',
        \Domain\Vacancy\Models\Vacancy::class => 'App\Http\Sections\Vacancy',
        \Domain\Page\Models\Page::class => 'App\Http\Sections\Page',
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
