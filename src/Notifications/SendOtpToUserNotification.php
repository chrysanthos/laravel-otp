<?php

namespace Chrysanthos\LaravelOtp\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;

class SendOtpToUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(protected int $otp) {}

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    public function toArray($notifiable)
    {
        return [
            'otp' => $this->otp,
        ];
    }
}
