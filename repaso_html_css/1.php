<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Recibe los datos del formulario
    $nombre = $_GET["nombre"];
    $apellidos = $_GET["apellidos"];
    $respuesta1 = $_GET["respuesta1"];
    $respuesta2 = isset($_GET["respuesta2"]) ? $_GET["respuesta2"] : [];

    // Verifica las respuestas
    $correctas = 0;

    if ($respuesta1 == "a") {
        $correctas++;
    }

    $respuestasCorrectas2 = ["a", "c"];
    if (count(array_diff($respuestasCorrectas2, $respuesta2)) === 0) {
        $correctas++;
    }

    // Muestra los resultados
    echo "<h1>Resultados</h1>";
    echo "Nombre: $nombre<br>";
    echo "Apellidos: $apellidos<br>";
    echo "Respuesta 1: " . ($respuesta1 == "a" ? "Correcta" : "Incorrecta") . "<br>";
    echo "Respuesta 2: " . ($correctas == 2 ? "Correcta" : "Incorrecta") . "<br>";

    // Enlace para volver al formulario
    echo "<a href='1v2.html'>Volver al formulario</a>";
}
?>