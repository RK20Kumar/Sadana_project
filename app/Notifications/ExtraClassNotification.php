<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Schedule;

class ExtraClassNotification extends Notification
{
    use Queueable;
    /**
     * The schedule instance.
     *
     * @var \App\Models\Schedule
     */
    protected $schedule;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\Schedule  $schedule
     */

   
    public function __construct(Schedule $schedule)
    {
        $this->schedule = $schedule;
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
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('New Extra Class Scheduled for '. $this->schedule->title )
        ->markdown('emails.extra_class_notification',['schedule' => $this->schedule]);
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
