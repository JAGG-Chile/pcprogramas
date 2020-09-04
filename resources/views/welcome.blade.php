@extends('layout')

@section('title','Home')

@section('content')
    <div class="contenedor">
        <h1 class="display-4">¡ Bienvenido !</h1><br>
        <p class="lead">En PCPROGRAMAS te ayudamos a continuar adelante con tu negocio, llevándolo a otro nivel. Espero que en nuestra página puedas encontrar la información que buscas.</p>
        <hr class="my-4">
        <p>Te invito a contactarme para agendar una reunión presencial o virtual. Si requieres soporte técnico o desarrollar una idea, no lo dudes.</p>
        <div class="boton">
            <a class="btn btn-primary btn-lg" href="{{ route('contacto') }}" role="button">Contáctame</a>
        </div>
    </div>
@endsection
