@extends('layout')

@section('title','Contacto')

@section('content')
<div class="row">
    <div class="col jumbotron">
        <h1 class="display-4">Contacto.</h1><p></p>
        <form method="POST" action="{{ route('postcontacto') }}"> 
            @csrf
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" name="nombre" class="form-control" value="{{ old('nombre') }}">
                    {!! $errors->first('nombre','<small>:message</small><br>')!!}
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    {!! $errors->first('email','<small>:message</small><br>')!!}
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputFono1" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" name="telefono" class="form-control" value="{{ old('telefono') }}">
                    {!! $errors->first('telefono','<small>:message</small><br>')!!}
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="mensaje" rows="2" value="{{ old('mensaje') }}"></textarea>
                    {!! $errors->first('mensaje','<small>:message</small><br>')!!}
                </div>
            </div>
            <div class="boton-enviar">
                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
            </div>
        </form>
    </div>
    <div class="col"></div>
    <div class="col"></div>
</div>
@endsection
