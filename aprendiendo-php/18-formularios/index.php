<!DOCTYPE HTML>
<html lang="es">
    <head >
        <meta charset="utf-8"/>
        <title>Formularios de PHP y HTML</title>
        
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="nombre">Nombre :</label>
            <p><input type="text" name="nombre" autofocus="autofocus" required="required" placeholder="Introducir nombre"/></p>
            <label for="apellido">Apellido :</label>            
            <p><input type="text" name="apellido"/></p>
            
            <label for="boton">Apellido :</label>            
            <p><input type="button" name="apellido" value="Clicame"/></p>
            
            <label for="sexo">sexo :</label>            
            <p>
                Hombre<input type="checkbox" name="sexo" value="Hombre" checked="cheked"/>
                Mujer<input type="checkbox" name="sexo" value="Mujer" />
            </p>
            
            <label for="color">Color :</label>            
            <p><input type="color" name="color"/></p>
            
            <label for="fecha">Fecha :</label>            
            <p><input type="date" name="fecha"/></p>
            
            <label for="correo">Correo :</label>            
            <p><input type="email" name="correo"/></p>
            
            <label for="archivo">Archivo :</label>            
            <p><input type="file" name="archivo" multiple="multiple"/></p>
            
            <label for="correo">Correo :</label>            
            <p><input type="email" name="correo"/></p>
            
            <label for="hidden">Camp no visible :</label>            
            <p><input type="hidden" name="hidden"/></p>
            
            <label for="numero">Numero :</label>            
            <p><input type="number" name="numero"/></p>
            
            <label for="password">Password :</label>            
            <p><input type="password" name="password"/></p>
            
            <label for="continente">Radio :</label>            
            <p>
                America del sud<input type="radio" name="continente" value="America del sur"/>
                Europa<input type="radio" name="continente" value="Europa"/>
                Asia<input type="radio" name="continente" value="Asia"/>
            
            </p>
            
            <label for="web">Pagina Web :</label>            
            <p><input type="url" name="web"/></p>
            
            
            <p><textarea></textarea></p>
            <label for="peliculas">Peliculas :</label>            
            <p><select>
                <option value="Spiderman">Spiderman</option>
                <option value="Batman">Batman</option>
                <option value="Gran torino">Gran torino</option>
                <option value="La jungla de cristal"> La jungla de cristal</option>
            </select></p>
            <br/>           
            
            
            <input type="submit" value="Enviar"/>
            
            
            
            
            
        </form>
    </body>
    
</html>