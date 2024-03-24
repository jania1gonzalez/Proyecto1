<!DOCTYPE html>
<html lang="en">
    <head>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>libro - Mi Sitio Web</title>
        <link rel="stylesheet" href="estilos.css">
        <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="bd">
        <form action="{{ route('libro.update', $libro) }}" method="POST" action="/libro">
        @csrf
        @method('PATCH')
<!-- A grey horizontal navbar that becomes vertical on small screens -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Index</a>
            </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  href="{{ route('libro.index') }}" role="button" data-bs-toggle="dropdown">Libros</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('libro.index') }}">Index Libro</a></li>
                        <li><a class="dropdown-item" href="{{ route('libro.create') }}">Crear Libro</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('editorial.index') }}" role="button" data-bs-toggle="dropdown">Editoriales</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('editorial.index') }}">Index Editorial</a></li>
                        <li><a class="dropdown-item" href="{{ route('editorial.create') }}">Crear Editorial</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('comentario.index') }}" role="button" data-bs-toggle="dropdown">Comentarios</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('comentario.index') }}">Index Comentario</a></li>
                        <li><a class="dropdown-item" href="{{ route('comentario.create') }}">Crear Comentario</a></li
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

        //Validacion
    @include('parciales.formError')

            
        <h1>libro</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $libro->nombre }}" value="{{ old ('nombre') }}"required>
    
            <label for="id_autor">Id del autor:</label>
            <input type="number" id="id_autor" name="id_autor" value="{{ $libro->id_autor }}" value="{{ old ('id_autor')}}" required>
    
            <label for="unidades_fisicas">Unidades fisicas:</label>
            <input type="number" id="unidades_fisicas" name="unidades_fisicas" value="{{ $libro->unidades_fisicas }}" value="{{ old ('unidades_fisicas')}}" required>
    
            <label for="sinopsis">Sinopsis:</label>
            <textarea id="sinopsis" name="sinopsis" rows="4" value="{{ old ('sinopsis')}}"required></textarea>   
            <label for="genero">Genero:</label>
            <select id="genero" name="genero">
                <option value="terror" @selected($libro->genero == 'terror')>Terror</option>
                <option value="misterio" @selected($libro->genero == 'misterio')>Misterio</option>
                <option value="magia" @selected($libro->genero == 'magia')>Magia</option>
                <option value="accion" @selected($libro->genero == 'accion')>Accion</option>
                <option value="otra">Otra</option>
            </select>
    
            <label>
                <input type="checkbox" name="virtual" value="True">
                ¿Con formato virtual?
            </label>
    
            <button type="submit">Actualizar</button>
        </form>
    
        <div class="footer">
            <h2>Contáctame en...</h2>
            <a href="jania.gonzalez5631@alumnos.udg.mx">jania.gonzalez5631@alumnos</a>
        </div>
        
    
    </body>
    </html>
    </html>
</html>