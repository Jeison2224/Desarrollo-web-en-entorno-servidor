<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cantidad = $_GET["cantidad"];
    $moneda = $_GET["moneda"];

function cambio($cantidad, $moneda) {
    // Valores de cambio
    $cambioDolares = 1.0543;
    $cambioLibras = 0.8678;

    $resultado = 0;
    $monedaDestino = "";

    if ($moneda === "dolares") {
        $resultado = $cantidad * $cambioDolares;
        $monedaDestino = "Dólares USA";
    } elseif ($moneda === "libras") {
        $resultado = $cantidad * $cambioLibras;
        $monedaDestino = "Libras Esterlinas";
    }

    // Mostrar el resultado
    echo "<h2>Resultado de la conversión:</h2>";
    echo "$cantidad euros son equivalentes a $resultado $monedaDestino<br>";
}
echo "<br>";
cambio($cantidad, $moneda);
echo "<br>";
cambio(200, "libras");
echo "<br>";
cambio(200, "dolares");
echo "<br>";
cambio(201, "libras");

}
?>