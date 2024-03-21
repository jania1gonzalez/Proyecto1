<!DOCTYPE html>
<html lang="en">
    <head>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editoriales - Mi Sitio Web</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body class="bd">
        <form action="{{ route('editorial.update', $editorial) }}" method="POST" action="/editorial">
        @csrf
        @method('PATCH')
        <div class="nav">
            <a href="../../index.php">Inicio</a>
            <a href="{{ route('editorial.create') }}">Formulario</a>
            <a href="{{ route('editorial.index') }}">Listado Formulario</a>
        </div>

        //Validacion
    @include('parciales.formError')

            
        <h1>Editoriales</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $editorial->nombre }}" value="{{ old ('nombre') }}"required>
    
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" value="{{ $editorial->correo }}" value="{{ old ('correo')}}" required>
    
            <label>Género:</label>
            <input type="radio" id="genero-masculino" name="genero" value="masculino" required>
            <label for="genero-masculino">Masculino</label>
            <input type="radio" id="genero-femenino" name="genero" value="femenino" required>
            <label for="genero-femenino">Femenino</label>
    
            <label for="contrasenia">Contraseña:</label>
            <input type="password" id="contrasenia" name="contrasenia" required>
    
            <label for="comentario">Comentario:</label>
            <textarea id="comentario" name="comentario" rows="4" value="{{ old ('comentario')}}"required></textarea>   
            <label for="ciudad">Ciudad:</label>
            <select id="ciudad" name="ciudad">
                <option value="guadalajara" @selected($editorial->ciudad == 'guadalajara')>Guadalajara</option>
                <option value="zapopan" @selected($editorial->ciudad == 'zapopan')>Zapopan</option>
                <option value="tonala" @selected($editorial->ciudad == 'tonala')>Tonalá</option>
                <option value="otra">Otra</option>
            </select>
    
            <label>
                <input type="checkbox" name="interesado" value="si">
                Me interesa contratarte
            </label>
    
            <button type="submit">Enviar</button>
        </form>
    
        <div class="footer">
            <h2>Contáctame en...</h2>
            <a href="jania.gonzalez5631@alumnos.udg.mx">jania.gonzalez5631@alumnos</a>
        </div>
        
    
    </body>
    </html>
    </html>
</html>