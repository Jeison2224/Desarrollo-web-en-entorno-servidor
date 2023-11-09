<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="1.php" method="get">
    <label for="num">Introduce un numero</label>
    <input type="number" id="num" name="num" required><br><br>
    <input type="submit" value="enviar">
  </form>
</body>
</html>

<?php
$_SERVER["REQUEST_METHOD"] == "GET";
$num = $_GET["num"];

resto($num);

function resto($num) {
    $r = array("cero", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve", "diez", "once");
    $resto = $num % 12;

    echo "<h1>Resultado</h1>";
    echo "El numero introducido ha sido el $num";
    echo "<br>";
    echo "y el resto de su division por 12 es $r[$resto]";
}
?>