<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Mensaje Enviado a PCPROGRAMAS</title>
</head>
<body>
    <!--{{ var_dump($mensaje)}}-->
    <h1>Confirmación de Mensaje Enviado</h1>
    <p>Hola, <strong>{{$mensaje['nombre']}}</strong><br>
    <p>Hemos recibido tu mensaje desde el correo - <strong>{{$mensaje['email']}}</strong></p>
    <p>El mensaje que has enviado es:<br><br>
    {{$mensaje['mensaje']}}</p>
    <p>Te contactaremos al <strong>{{$mensaje['telefono']}}</strong> dentro de 24 horas.</p>
    <br>
    <p>Te agradecemos el contacto.</p>
    <img src="{{asset('../img/publicdomainq-ok6.png')}}">
    <hr class="my-4">
    <h5>No respondas a este correo.</h5><br>
</body>
</html>