<?php

namespace App\Mail;

use App\User;
use App\Empleado;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MontoAlerta extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $emp;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $emp)
    {
        $this->user = $user;
        $this->emp = $emp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        dd($user);
        return $this->markdown('emails.alertamonto')->subject('Notificaciones - Alerta Bitu');
    }
}
