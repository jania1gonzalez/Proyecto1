<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado</title>
</head>
<body>

    <div class="nav">
        <a href="index.php">Inicio</a>
        <a href="{{ route('libro.create') }}">Formulario libros</a>
        <a href="{{ route('libro.index') }}">Listado libros</a>
    </div>
    <h1>Listado de libros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Sinopsis</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libros)
            <tr>
                
                <td>{{ $libros->nombre }}</td>
                <td>{{ $libros->sinopsis }}</td>
                <td>{{ $libros->created_at }}</td>
                <td>
                    <a href="{{ route('libro.show', $libros) }}">Ver </a>|
                    <a href="{{ route('libro.edit', $libros) }}">Edit</a>|
                    <form action=" {{ route('libro.destroy', $libros) }} " method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>           

            @endforeach
        </tbody>
    </table>
</body>
</html>