@extends('layout');
@section('content')
<div>
    <div class="jumbotron">
        <h1 class="display-4">Contacto.</h1><p></p>
        <form>
            <div class="form-group row">
                <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
               <div class="col-sm-10">
                    <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleInputFono1" class="col-sm-2 col-form-label">Teléfono</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="exampleInputFono1" aria-describedby="fonoHelp">
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Mensaje</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                </div>
            </div>
            <div class="boton-enviar">
                <button type="submit" class="btn btn-primary btn-lg">Enviar Mensaje</button>
            </div>
        </form>

    </div>
</div>
@endsection
