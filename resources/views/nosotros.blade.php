@extends('layout')

@section('title','Acerca de')

@section('content')
<div class="row">
    <div style="background:transparent !important;color:#fff;" class="col jumbotron">
        <h1 class="display-4">Acerca de mí.</h1><br>
        <p class="lead">Mi nombre es Juan García, soy Programador desde 1992. El año 2015 comencé a ofrecer mis servicios profesionales en modalidad freelance. <br>Las tecnologías que utilizo son:</p>
        <ul>
            <li>PHP con Laravel y MySQL</li>
            <li>MEAN (MongoDB,Express,Angular,Nodejs)</li>
        </ul>
        <hr class="my-4">
        <h5>¡ Y ahora también ! Soporte técnico informático.</h5>
        <a class="btn btn-primary btn-lg" href="/contacto" role="button">Contáctame</a>
    </div>
    <div class="col"></div>
    <div class="col"></div>
</div>
@endsection