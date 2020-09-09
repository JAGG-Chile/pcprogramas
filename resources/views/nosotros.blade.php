@extends('layout')

@section('title','PCPROGRAMAS - Acerca de')

@section('content')
    <div class="contenedor"> <!--style="background:transparent !important;color:#fff;" -->
        <h1 class="display-4">Acerca de.</h1><br>
        <p class="lead">PCPROGRAMAS comenzó el 2015 como un emprendimiento personal, pero hoy en día es una empresa establecida en el rubro de los servicios informáticos a PYMES.<br>Las tecnologías que utilizamos en el desarrollo de software son:</p>
        <ul>
            <li>PHP con Laravel, MySQL, Bootstrap.</li>
            <li>HTML, CSS, Javascript, Wordpress.</li>
        </ul>
        <hr class="my-4">
        <h4>Consulte por Contrato de Soporte Técnico mensual.</h4>
        <div class="boton">
            <a class="btn btn-primary btn-lg" href="/contacto" role="button">Contáctenos</a>
        </div>  
    </div>
@endsection