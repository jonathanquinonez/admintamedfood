<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BloqueoUsuario extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $cedula;
    public $nombreempresa;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user,$cedula,$nombreempresa)
    {
        $this->user = $user;
        $this->cedula = $cedula;
        $this->nombreempresa = $nombreempresa;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.bloqueousuario')->subject('Usuario Bloqueado - Bitu');
    }
}
