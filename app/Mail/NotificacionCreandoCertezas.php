<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NotificacionCreandoCertezas extends Mailable
{
    use Queueable, SerializesModels; 
  
public $titulo;
public $mensaje;
public $pago;
public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($titulo,$mensaje,$user)
    {
        $this->titulo = $titulo;
        $this->mensaje = $mensaje;

        $this->user = $user;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.emailNotificacion'); 
    }
}
