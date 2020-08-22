<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Recibido</title>
</head>
<body>
    <!--{{ var_dump($mensaje)}}-->
    <h1>Mensaje Recibido</h1>
    <p>Recibiste un mensaje de <strong>{{$mensaje['nombre']}} - {{$mensaje['email']}}</strong></p>
    <p>Teléfono: {{$mensaje['telefono']}}</p>
    <p>Mensaje:<br><br>
    {{$mensaje['mensaje']}}</p>
</body>
</html>