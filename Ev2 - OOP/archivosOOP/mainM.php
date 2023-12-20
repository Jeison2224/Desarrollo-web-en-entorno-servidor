<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Menu</title>
</head>
<body>
    <?php


        require_once("Menu.php");

        $m = new Menu("Lunes","3-8-2024","hamburguesa","Sushi","Helado");
        $m1 = new Menu("Lunes","3-8-2024","Arroz","Pescado","Pastel");
        echo "Dia: ".$m1->getDia()."<br/>";
        echo "Fecha: ".$m1->getFecha()."<br/>";
        echo "Primero platos: ".$m1->getPrimerosplatos()."<br/>";
        echo "Segundos platos: ".$m1->getSegundosplatos()."<br/>";
        echo "Postres: ".$m1->getPostres()."<br/>";

    ?>
</body>
</html>