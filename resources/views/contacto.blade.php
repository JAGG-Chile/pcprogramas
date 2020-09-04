@extends('layout')

@section('title','Contacto')

@section('content')
<div class="contenedor">
    <h1 class="display-4">Contacto.</h1>
    <form method="POST" action="{{ route('postcontacto') }}">
        @csrf
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
        {!! $errors->first('nombre','<small>:message</small><br>')!!}

        <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
        {!! $errors->first('email','<small>:message</small><br>')!!}

        <label for="exampleInputFono1" class="col-sm-2 col-form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
        {!! $errors->first('telefono','<small>:message</small><br>')!!}

        <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Mensaje</label>
        <textarea class="form-control" name="mensaje" rows="3" value="{{ old('mensaje') }}"></textarea>
        {!! $errors->first('mensaje','<small>:message</small><br>')!!}

        <div class="boton">
            <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
        </div>
        
    </form>
</div>
@endsection
