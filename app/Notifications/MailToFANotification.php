<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Appointment;

class MailToFANotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
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
        $appointment = Appointment::find($this->request->appointment_id);
        if(!is_null($this->request->attachment)){
            return (new MailMessage)
                    ->subject($this->request->subject)
                    ->line($this->request->description)
                    ->line('Thank you for using Sahaayak!')
                    ->attach($this->request->attachment, [
                        'as' => $appointment->name.'_'.$appointment->college_id.'_Report',
                        'mime' => 'application/pdf',
                    ]);
        }
        else{
            return (new MailMessage)
                    ->subject($this->request->subject)
                    ->line($this->request->description)
                    ->line('Thank you for using Sahaayak!');
        }
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
            'data'=>'Mail to faculty Advisor '.$this->request->fa_email,
            'refrence'=>'counsellorDashboard' 
        ];
    }
}
