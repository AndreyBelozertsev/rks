<?php

namespace App\Providers;

use Domain\Case\Models\Client;
use App\Observers\ClientObserver;
use App\Observers\ServiceObserver;
use Domain\Product\Models\Service;
use Domain\Setting\Models\Setting;
use App\Events\SendContactFormEvent;
use App\Observers\NavigationObserver;
use Domain\Setting\Models\Navigation;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use App\Listeners\SendContactFormListener;
use App\Observers\ServiceCategoryObserver;
use Domain\Product\Models\ServiceCategory;
use App\Observers\DevelopmentStageObserver;
use Domain\Product\Models\DevelopmentStage;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SendContactFormEvent::class => [
            SendContactFormListener::class
        ]
    ];

    protected $observers = [
        Client::class => [ClientObserver::class],
        DevelopmentStage::class => [DevelopmentStageObserver::class],
        Navigation::class => [NavigationObserver::class],
        ServiceCategory::class => [ServiceCategoryObserver::class],
        Service::class => [ServiceObserver::class],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
