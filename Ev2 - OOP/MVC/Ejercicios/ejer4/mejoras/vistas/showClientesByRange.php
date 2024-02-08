<?php

use function PHPUnit\Framework\isEmpty;

    include ("layouts/header.php");

    echo "<h1>LISTADO  DE CLIENTES DE --".$pais."-- EN BD JARDINERIA</h1><br>";

    $query = $data["clientes"];

    if ($data["clientes"]==null) {
    	echo "<h1>Actualmente no existe ningún producto dado de alta en esta gama</h1>";
    } else {
        echo "<table>";
        echo "<tr> <th>CÓDIGO</th> <th>NOMBRE</th> <th>NOMBRE CONTACTO</th> <th>APELLIDO CONTACTO</th> </tr>";

        foreach($query as $row) {
            echo "<tr>";
            echo "<td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td>";
            echo "</tr>";
        }
        print ("</table>");
    }
    echo "<br><p><a href='index.php'>Realizar nueva consulta</a></p>";

    include ("layouts/footer.php");
?>