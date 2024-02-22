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
        <a href="{{ route('libros.create') }}">Formulario</a>
        <a href="{{ route('libros.index') }}">Listado Formulario</a>
    </div>
    <h1>Listado de Libros</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($libros as $libros)
            <tr>
                <td>{{ $libros->nombre }}</td>
                <td>{{ $libros->correo }}</td>
                <td>{{ $libros->created_at }}</td>
                <td>
                    <a href="{{ route('libros.show', $libros) }}">Ver </a>|
                    <a href="{{ route('libros.edit', $libros) }}">Edit</a>|
                    <form action=" {{ route('libros.destroy', $libros) }} " method="POST">
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