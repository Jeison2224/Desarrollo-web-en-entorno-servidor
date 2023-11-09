<?php
$valor = array(500, 200, 100, 50, 20, 10, 5, 2, 1);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $cantidad = $_GET["cantidad"];

    if (is_numeric($cantidad) && $cantidad >= 0) {
        echo "Desglose de " . $cantidad . " euros:<br>";

        for ($i = 0; $i < count($valor); $i++) {
            $billete = $valor[$i];
            $cantidad_billetes = floor($cantidad / $billete);

            if ($cantidad_billetes > 0) {
                echo $cantidad_billetes . " billete(s) de " . $billete . "€<br>";
                $cantidad -= $cantidad_billetes * $billete;
            }
        }

        if ($cantidad > 0) {
            echo $cantidad . " euro(s) en monedas de 1€<br>";
        }

        echo "<a href='2.php'>Volver a introducir nueva cantidad</a>";
    } else {
        echo "La cantidad debe ser un número entero positivo.";
    }
} else {
    echo '<form method="get" action="2.php">
        <label for="cantidad">Introduce la cantidad de euros a desglosar:</label>
        <input type="text" id="cantidad" name="cantidad">
        <input type="submit" value="Calcular desglose">
    </form>';
}
?>
