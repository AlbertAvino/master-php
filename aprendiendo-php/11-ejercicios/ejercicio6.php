<?php

/* 
 * Ejercicio 6.
 * imprimir por pantalla todas tablas en formato de html
 */

echo "<table border='1'><tr>";
echo "<tr>";
    for ($i = 0; $i <=10;$i++)
    {
        echo "<td>Tabla del $i</td>";
    }
echo "</tr>";
echo "<tr>";
    for ($i = 0; $i <=10;$i++)
    {
        echo "<td>";
        for ($x = 0; $x <=10;$x++)
            {
                echo "$i x $x = " . ($i*$x)."<br>";
                    
            }
        echo "</td>";
    }
echo "</tr>";
echo "</table>";