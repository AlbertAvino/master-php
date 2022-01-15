<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Imprimir por pantalla - Master en PHP        </title>
              
    </head>
    <body>
        <h1>Master en PHP - Albert Aviñó</h1>
        <!-- la etiqueta següent es el mateix 
             que la etiqueta de php amb el echo -->
        <?="Bienvenido al curso de php"?>
            
        <?php
            // Titular de la sección (comentari)
            echo "<h3>Listado de videojuegos:</h3>";
            /* Esta es una lista
             * de videojuegos 
             * bonitos 
             */
            echo "<ul>"
                 ."<li>GTA</li>"
                 ."<li>Fifa</li>"
                 ."<li>Mario Bros</li>"
                 ."</ul>";
            // Parrafo explicativo
            echo '<p>Esta es toda'.' - '.'lista de juegos </p>';
        ?>
    </body>
        
        
</html>


