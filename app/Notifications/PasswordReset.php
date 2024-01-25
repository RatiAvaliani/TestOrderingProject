<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordReset extends Notification
{
    use Queueable;

    public $token;

    /**
     * Create a new notification instance.
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable)
    {
        return (new MailMessage)
            ->greeting('Palitra')
            ->salutation('გთხოვთ ეწვიოთ ლინკს პაროლის აღსადგენად')
            ->subject('მომხმარებლის პაროლის აღდგენა')
            ->line('მომხმარებლის პაროლის აღდგენის ლინკი.')
            ->action('პაროლის აღდგენა', url('password/reset', $this->token));
    }
}
