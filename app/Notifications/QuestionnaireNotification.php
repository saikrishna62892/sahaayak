<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Notifications\QuestionnaireNotification;
use App\User;
use Carbon\Carbon;

class QuestionnaireNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($questionnaire)
    {
        $this->questionnaire = $questionnaire;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
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
                    ->greeting('Hello')
                    ->subject('A new Questionnaire '.$this->questionnaire->questionnaireTitle)
                    ->line('A new questionnaire has been added for the purpose of '.$this->questionnaire.'. Check it out if you think it will help you')
                    ->action('Questionnaire', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'data'=>'New questionnaire'.$this->questionnaire->questionnaireTitle,
            'refrence'=>'home'          
        ];
    }
}
