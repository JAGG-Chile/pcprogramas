@extends('layout')

@section('title','Gracias!!')

@section('content')
    <div class="contenedor">
        <h1 class="display-4">¡ Gracias !</h1>
        <p class="lead">Hemos recibido su mensaje correctamente.<br><br>Se ha generado un mensaje de confirmación al
            correo que ha
            ingresado.</p>
        <hr class="my-4">
        <h5>No olvide revisar su carpeta de Correos No Deseados si no recibe la confirmación.</h5><br>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Volver</a>
            </div>
            <div class="col align-self-end">
                <img src="{{asset('../img/publicdomainq-ok6.png')}}">
            </div>
        </div>
    </div>
</div>
@endsection
