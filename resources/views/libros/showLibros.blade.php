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
    <a href="{{ route('libro.create') }}">Formulario Libros</a>
    <a href="{{ route('libro.index') }}">Listado Libros</a>
</div>    
<body>
    <h1>Libros Id {{ $libro -> id }} </h1>
    <ul>
        <li>Nombre: {{ $libro->nombre }}</li>
        <li>Autor Id: {{ $libro->id_autor }}</li>
        <li>Unidades: fisicas: {{ $libro->unidades_fisicas }}</li>
        <li>Sinopsis: {{ $libro->sinopsis }}</li>
        <li>Genero: {{ $libro->genero }}</li>
        <li>Virtual: {{ $libro->virtual }}</li>
    </ul>
</body>    
</html>