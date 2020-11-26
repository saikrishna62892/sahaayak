<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentAcceptedNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($appointment)
    {
        $this->appointment = $appointment;
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
        $startslots = ['00','08AM - 09AM','09AM - 10AM','10AM - 11AM','11AM - 12PM','12PM - 01PM','01PM - 02PM','02PM - 03PM','03PM - 04PM','04PM - 05PM'];
        $s=$this->appointment->slot;

        return (new MailMessage)
                    ->greeting('Hello  '.$this->appointment->name)
                    ->subject('Regarding Sahaayak Appointment')
                    ->line('Your Appointment has been accepted and our Counsellor will contact you as per your request on  Dated :'.$this->appointment->date.' Slot : '.$startslots[$s].'.')
                    ->line('Thank you for using Sahaayak!');
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
            'data'=>'Appointment Accepted '.$this->appointment->name,
            'refrence'=>'userDashboard' 
        ];
    }
}
