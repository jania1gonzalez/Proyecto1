<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info comentario</title>
</head>
<div class="nav">
    <a href="../index.php">Inicio</a>
    <a href="{{ route('comentario.create') }}">Formulario</a>
    <a href="{{ route('comentario.index') }}">Listado Formulario</a>
</div>
<body>
    <h1>Comentario Id{{ $comentario -> id }}</h1>
    <ul>
        <li>Nombre: {{ $comentario->nombre }}</li>
        <li>Correo: {{ $comentario->correo }}</li>
        <li>Comentario: {{ $comentario->comentario }}</li>
        <li>Ciudad {{ $comentario->ciudad }}</li>
    </ul>
</body>
</html>