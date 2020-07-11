<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $asunto;
    public $message;
    public $destinatarios;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($asunto,$message,$destinatarios)
    {
        $this->asunto = $asunto;
        $this->message = $message;
        $this->destinatarios = $destinatarios;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.email')
        ->with($this->message)
        ->cc($this->destinatarios)
        ->subject($this->asunto);
    }
}
