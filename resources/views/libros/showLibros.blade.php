<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info libros</title>
</head>
<div class="nav">
    <a href="../index.php">Inicio</a>
    <a href="{{ route('libros.create') }}">Formulario</a>
    <a href="{{ route('libros.index') }}">Listado Formulario</a>
</div>
<body>
    <h1>Comentario Id{{ $libros -> id }}</h1>
    <ul>
        <li>Nombre: {{ $libros->nombre }}</li>
        <li>Correo: {{ $libros->correo }}</li>
        <li>Comentario: {{ $libros->libros }}</li>
        <li>Ciudad {{ $libros->ciudad }}</li>
    </ul>
</body>
</html>