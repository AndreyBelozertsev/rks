<?php

namespace App\Listeners;

use Domain\Auth\Models\User;
use App\Events\SendContactFormEvent;
use Illuminate\Support\Facades\Cache;
use Services\Telegram\TelegramBotApi;
use Illuminate\Queue\InteractsWithQueue;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use Services\Bitrix24\Actions\SendContactForm;
use App\Notifications\ContactFormSendNotification;

class SendContactFormListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(SendContactFormEvent $event)
    {
        $event->customer->services = $this->createServicesList($event->customer->services);

        TelegramBotApi::sendMessage( $this->textForTelegram($event->customer) , env('LOGGER_TELEGRAM_CHAT_ID'), env('LOGGER_TELEGRAM_TOKEN') );
        Notification::send(User::all(), new ContactFormSendNotification ($event->customer));
        SendContactForm::send($event->customer, $event->customer->services);

    }

    protected function textForTelegram($customer): string
    {
        return 'Заявка на сайта ' . env('APP_NAME')
        . "\nИмя - "  . $customer->name
        . "\nТелефон - "  . $customer->phone
        . "\nEmail - "  . $customer->email
        . "\nУслуги - "  . $customer->services
        . "\nУРЛ - "  . $customer->url
        . "\nКомментарий - "  . $customer->comment;

    }

    protected function createServicesList($services): string
    {
        $serviceCategories = Cache::rememberForever('service_categories_with_additional', function () {
            return ServiceCategory::itemsWithAdditionalServices();
        }); 

        $servicesArray = explode(',' , $services);

        $servicesList = '';
       
        foreach($servicesArray as $service)
        {
            if(!isset($serviceCategories[$service])) continue;
            
            $servicesList .= $serviceCategories[$service] . ', ';
        }
        return $servicesList;
    }
}