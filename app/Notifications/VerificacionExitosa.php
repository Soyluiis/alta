<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class VerificacionExitosa extends Notification
{

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('¡Verificación Exitosa!')
            ->greeting('¡Hola!')
            ->line('Tu verificación ha sido exitosa.')
            ->line('Gracias por completar la verificación.')
            ->action('Ir al sitio', url('/')) // Cambia la URL a donde deseas redirigir al usuario
            ->line('Gracias por usar nuestra aplicación.');
    }







    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
