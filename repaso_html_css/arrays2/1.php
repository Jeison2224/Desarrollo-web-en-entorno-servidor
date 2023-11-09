<?php
$longitud = 50;
$minimo = 1;
$maximo = 100;
// Función para generar un array aleatorio
function generarArrayAleatorio($longitud, $minimo, $maximo) {
    $array = array();
    for ($i = 0; $i < $longitud; $i++) {
        $array[] = rand($minimo, $maximo);
    }
    return $array;
}

// Función para eliminar elementos duplicados de un array
function eliminarRepetidos($array) {
    return array_values(array_unique($array));
}

// Función para calcular la media de un array de números
function calcularMedia($array) {
    $suma = array_sum($array);
    $longitud = count($array);
    if ($longitud > 0) {
        return $suma / $longitud;
    } else {
        return 0; // En caso de un array vacío para evitar división por cero
    }
}

// Generar un array de 50 números enteros aleatorios en el rango de 1 a 100
$arrayAleatorio = generarArrayAleatorio(50, 1, 100);

// Eliminar elementos duplicados del array
$arraySinDuplicados = eliminarRepetidos($arrayAleatorio);

// Calcular la media de los números del array sin duplicados
$media = calcularMedia($arraySinDuplicados);

echo "<h1 style='color: skyblue;'>Implementacion de funciones de arrays</h1>";
echo "<p style='color: green;'>Array aleatorio: </p>";
foreach ($arrayAleatorio as $key => $value) {
    echo "<p style='color: green;'> $value</p>";

}
echo "<p style='color: green;'>Array sin duplicados: </p>";
foreach ($arraySinDuplicados as $key => $value) {
    echo "<p style='color: green;'> $value</p>";

}
echo "<p style='color: green;'>media de los numeros: $media </p>";

?>
