<?php
$enteros = range(1, 20);


$numerosPares = array_filter($enteros, function ($numero) {
    return $numero % 2 === 0;
});


$numerosCuadrados = array_map(function ($numero) {
    return $numero * $numero;
}, $numerosPares);


$sumaCuadrados = array_reduce($numerosCuadrados, function ($carry, $numero) {
    return $carry + $numero;
}, 0);


arsort($enteros);

// Muestra en la página web los resultados
echo "<h2>Números Pares Originales:</h2>";
echo "<pre>";
print_r($numerosPares);
echo "</pre>";

echo "<h2>Números al Cuadrado:</h2>";
echo "<pre>";
print_r($numerosCuadrados);
echo "</pre>";

echo "<h2>Suma de los Cuadrados:</h2>";
echo $sumaCuadrados;

echo "<h2>Lista de Números Ordenada Descendentemente:</h2>";
echo "<pre>";
print_r($enteros);
echo "</pre>";
?>