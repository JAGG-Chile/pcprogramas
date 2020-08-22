@extends('layout')

@section('title','Gracias!!')

@section('content')
<div class="row">
    <div class="col jumbotron">
        <h1 class="display-4">¡ Gracias !</h1>
        <p class="lead">Hemos recibido tu mensaje correctamente.<br><br>Se ha generado un mensaje de confirmación al
            correo que has
            ingresado.</p>
        <hr class="my-4">
        <h5>No olvides revisar tu carpeta de Correos No Deseados si no recibes la confirmación.</h5><br>
        <a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Volver</a>
    </div>
    <div class="col">
    </div>
    <div class="col align-self-end">
        <img src="{{asset('../img/publicdomainq-ok6.png')}}">
    </div>
</div>
@endsection
