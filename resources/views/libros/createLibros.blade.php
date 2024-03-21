<!DOCTYPE html>
<html lang="en">
    <head>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>libros - Mi Sitio Web</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body class="bd">
        <form method="POST" action="/libro">
        @csrf
        <div class="nav">
            <a href="../index.php">Inicio</a>
            <a href="{{ route('libro.create') }}">Formulario libros</a>
            <a href="{{ route('libro.index') }}">Listado libros</a>
        </div>

//Validacion
    @include('parciales.formError')

        <h1>libros</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old ('nombre')}}" required>

            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <label for="id_autor">Id del autor:</label>
            <input type="number" id="id_autor" name="id_autor" value="{{ old ('id_autor')}}" required>

            @error('id_autor')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
    
            <label for="unidades_fisicas">Unidades fisicas:</label>
            <input type="number" id="unidades_fisicas" name="unidades_fisicas" required>
    
            <label for="sinopsis">Sinopsis:</label>
            <textarea id="sinopsis" name="sinopsis" rows="4" value="{{ old ('sinopsis')}}" required></textarea>   
            @error('sinopsis')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="genero">Género:</label>
            <select id="genero" name="genero">
                <option value="terror">Terror</option>
                <option value="misterio">Misterio</option>
                <option value="magia">Magia</option>
                <option value="accion">Accion</option>
                <option value="otra">Otra</option>
            </select>
    
            <label>
                <input type="checkbox" name="virtual" value="True">
                ¿Con formato virtual?
            </label>
    
            <button type="submit">Subir</button>
        </form>
    
        <div class="footer">
            <h2>Contáctame en...</h2>
            <a href="jania.gonzalez5631@alumnos.udg.mx">jania.gonzalez5631@alumnos</a>
        </div>
        
    
    </body>
    </html>
    </html>
</html>
