<?php
// Crear una tabla HTML
$tabla = "<table>";

// Añadir filas y columnas a la tabla
for ($i = 0; $i < 10; $i++) {
 $tabla .= "<tr>";
 for ($j = 0; $j < 10; $j++) {
   $tabla .= "<td>$i,$j</td>";
 }
 $tabla .= "</tr>";
}

// Cerrar la tabla
$tabla .= "</table>";

// Imprimir la tabla
echo $tabla;
?>