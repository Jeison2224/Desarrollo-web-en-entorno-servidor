<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $filas = $_GET["filas"];
    $columnas = $_GET["columnas"];

}

function tabla($filas, $columnas){
    // Crear una tabla HTML
    $tabla = "<table style='border: 1px solid black;'>";

    // Añadir filas y columnas a la tabla
    for ($i = 1; $i <= $filas; $i++) {
        static $k = 1;
        $tabla .= "<tr style='border: 1px solid black;'>";
        for ($j = 1; $j <= $columnas; $j++) {
            $tabla .= "<td style='border: 1px solid black;'>$k</td>";
            $k++;
            }
        $tabla .= "</tr>";
        }
        $k = 1;

    // Cerrar la tabla
    $tabla .= "</table>";

    // Imprimir la tabla
    echo $tabla;
}

echo "<h1>Tabla 1, $filas x $columnas</h1>";
tabla($filas, $columnas);
echo "<br>";
echo "<h1>Tabla 1, 5 x 5</h1>";
tabla(5, 5);
echo "<br>";
echo "<h1>Tabla 1, 7 x 7</h1>";
tabla(7, 7);
echo "<br>";
echo "<h1>Tabla 1, 9 x 2</h1>";
tabla(9, 2);
?>