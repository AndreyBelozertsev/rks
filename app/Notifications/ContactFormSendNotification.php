<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormSendNotification extends Notification
{
    use Queueable;

    protected $message_data;

    /**
     * Create a new notification instance.
     */
    public function __construct($message_data)
    {
        $this->message_data = $message_data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('На сайте заполнена контактная форма')
                    ->line('Имя: ' . $this->message_data['name'])
                    ->line('Телефон: ' . $this->message_data['phone'])
                    ->line('Услуги: ' . $this->message_data['services'])
                    ->line('Электронный адрес: ' . $this->message_data['email'])
                    ->line('Текст сообщения: ' . $this->message_data['comment']);
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
