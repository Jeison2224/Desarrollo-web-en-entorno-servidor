<?php
// Función para mostrar los datos del array tal como se reciben
function mostrarArrayComoTabla($array) {
    echo "<table style='border: 1px solid grey;'>";
    echo "<tr><th style='color: green;'>Indice</th><th style='color: green;'>Valor</th></tr>";
    foreach ($array as $indice => $valor) {
        echo "<tr style='border: 1px solid grey;'><td style='border: 1px solid grey;color: green;'>$indice</td style='border: 1px solid grey;'><td style='border: 1px solid grey;color: green;'>$valor</td></tr>";
    }
    echo "</table>";
}

// Función para mostrar los datos del array ordenados descendentemente por valor
function mostrarArrayOrdenadoPorValor($array) {
    arsort($array); // Ordenar el array por valor de forma descendente
    mostrarArrayComoTabla($array);
}

// Función para mostrar los datos del array ordenados por índice (clave)
function mostrarArrayOrdenadoPorIndice($array) {
    ksort($array); // Ordenar el array por clave
    mostrarArrayComoTabla($array);
}

// Datos de prueba
$listaEquipos=array( "F.C. Barcelona"=>82, "Real Madrid"=>84, "Atlético Madrid"=>78, "Valencia"=>75, "Sevilla"=>76, "Villarreal"=>60, "Málaga"=>50, "Espanyol"=>47, "Athletic Bilbao"=>55, "Celta"=>51, "Real Sociedad"=>46, "Rayo Vallecano"=>49, "Getafe"=>36, "Osasuna"=>33, "Elche"=>41, "Deportivo"=>38, "Almería"=>29, "Levante"=>37, "Granada"=>35, "Zaragoza"=>32);

// Prueba de las funciones
/*echo "<h2>Array Original:</h2>";
mostrarArrayComoTabla($listaEquipos);

echo "<h2>Array Ordenado por Valor:</h2>";
mostrarArrayOrdenadoPorValor($listaEquipos);

echo "<h2>Array Ordenado por Índice (Clave):</h2>";
mostrarArrayOrdenadoPorIndice($datosPrueba);*/
?>

<form action="3.php" method="get">
    <label for="equipo">Elije el equipo:</label>
    <select id="equipo" name="equipo" required>
        <?php
        foreach ($listaEquipos as $key => $value) {
            ?>
            <option value=<?php array_keys($listaEquipos); ?>;
            <?php
        }
        ?>></option>
    </select><br><br>
    <input type="submit" value="Convertir">
</form>