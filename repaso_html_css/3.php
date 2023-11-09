<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $dolares = $_GET["dolar"];
    $libras = $_GET["libra"];

    // Valores de cambio
    $cambioDolares = 1.0543;
    $cambioLibras = 0.8678;

    for ($x=0; $x <= 10 ; $x++) {
        echo '<table>'
        .'<th>Euro</th>'
        .'<th>Dolares</th>'
        .'<th>Libras</th>'
        .'<tr></td><td>'
        .'<tr></td><td>'
        .'<tr></td><td>';
    }

}
?>

</table>