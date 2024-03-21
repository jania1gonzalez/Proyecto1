<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>info editoriales</title>
</head>
<div class="nav">
    <a href="../index.php">Inicio</a>
    <a href="{{ route('editorial.create') }}">Formulario</a>
    <a href="{{ route('editorial.index') }}">Listado Formulario</a>
</div>
<body>
    <h1>Comentario Id{{ $editorial -> id }}</h1>
    <ul>
        <li>Nombre: {{ $editorial->nombre }}</li>
        <li>Correo: {{ $editorial->correo }}</li>
        <li>Comentario: {{ $editorial->editorial }}</li>
        <li>Ciudad {{ $editorial->ciudad }}</li>
    </ul>
</body>
</html>