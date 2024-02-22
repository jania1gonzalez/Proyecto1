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
        <a href="{{ route('editoriales.create') }}">Formulario</a>
        <a href="{{ route('editoriales.index') }}">Listado Formulario</a>
    </div>
    <h1>Listado de Editoriales</h1>

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
            @foreach ($editoriales as $editoriales)
            <tr>
                <td>{{ $editoriales->nombre }}</td>
                <td>{{ $editoriales->correo }}</td>
                <td>{{ $editoriales->created_at }}</td>
                <td>
                    <a href="{{ route('editoriales.show', $editoriales) }}">Ver </a>|
                    <a href="{{ route('editoriales.edit', $editoriales) }}">Edit</a>|
                    <form action=" {{ route('editoriales.destroy', $editoriales) }} " method="POST">
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