<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RespuestaMensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;

    // Setear asunto de mail enviado desde form Contacto
    public $subject = 'Confirmación de mensaje enviado a pcprogramas.cl';

     /** Definimos variable publica para almacenar el mensaje recibido en el constructor, 
    * que proviene del controlador MensajesController método Store. De esta forma
    * estará accesible desde la vista emails/mensajes-recibidos
    */
    public $mensaje;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails/respuesta-mensajes-recibidos');
    }
}
