@extends('layout')

@section('title','PCPROGRAMAS - Inicio')

@section('content')
    <div class="contenedor">
        <h1 class="display-4">¡ Bienvenido !</h1><br>
        <p class="lead">En PCPROGRAMAS le ayudamos a continuar adelante con su negocio, llevándolo a otro nivel.</p>
        <hr class="my-4">
        <h4>Le invitamos a contactarnos para agendar una reunión presencial o virtual; ya sea que requiera de soporte, asesoría técnica o desarrollar un nuevo software para su empresa.</h4>
        <div class="boton">
            <a class="btn btn-primary btn-lg" href="{{ route('contacto') }}" role="button">Contáctenos</a>
        </div>
    </div>
@endsection
