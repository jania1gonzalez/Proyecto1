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
    <a href="{{ route('editoriales.create') }}">Formulario</a>
    <a href="{{ route('editoriales.index') }}">Listado Formulario</a>
</div>
<body>
    <h1>Comentario Id{{ $editoriales -> id }}</h1>
    <ul>
        <li>Nombre: {{ $editoriales->nombre }}</li>
        <li>Correo: {{ $editoriales->correo }}</li>
        <li>Comentario: {{ $editoriales->editoriales }}</li>
        <li>Ciudad {{ $editoriales->ciudad }}</li>
    </ul>
</body>
</html>