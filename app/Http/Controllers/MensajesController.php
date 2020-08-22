<?php

namespace App\Http\Controllers;

use App\Mail\MensajesRecibidos;
use App\Mail\RespuestaMensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MensajesController extends Controller
{
    public function store()
    {
        // validar datos ingresados en form de Contacto, y almacenar en variable
        $mensaje = request()->validate([
            'nombre'    =>'required|max:50',
            'email'     =>'required',
            'mensaje'   =>'required|max:300',
            'telefono'  =>'required|max:20'
        ]);

        // enviar email con datos ingresados
        
        Mail::to('informatico.juangarcia@gmail.com')->queue(new MensajesRecibidos($mensaje));
        Mail::to($mensaje['email'])->queue(new RespuestaMensajeRecibido($mensaje));
        
        /**
         * Para ver el html en pantalla. Se debe comentar Mail::to...
         */
        //return new MensajesRecibidos($mensaje);

        return redirect()->route('respuesta-contacto');
    }
}
