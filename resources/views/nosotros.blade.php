@extends('layout')

@section('title','Acerca de')

@section('content')
    <div class="contenedor"> <!--style="background:transparent !important;color:#fff;" -->
        <h1 class="display-4">Acerca de mí.</h1><br>
        <p class="lead">Mi nombre es Juan García, soy Programador desde 1992. Desarrollo aplicaciones web desde el año 2015. <br>Las tecnologías que utilizo son:</p>
        <ul>
            <li>PHP con Laravel, MySQL, Bootstrap.</li>
            <li>HTML, CSS, Javascript, Wordpress.</li>
        </ul>
        <hr class="my-4">
        <h5>También servicios de Soporte y Consultoría en informática.</h5>
        <div class="boton">
            <a class="btn btn-primary btn-lg" href="/contacto" role="button">Contáctame</a>
        </div>  
    </div>
@endsection