<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //conexion a la base de datos
    $cone = mysqli_connect   ("localhost", "root", "")
    or die ("no se pudo conectar");

    mysqli_select_db ($cone, "jardineria")
    or die ("no se pudo seleccionar la bbdd");
    ?>

    <h1 style="color: blue;">Seleciona Cliente a consultar</h1>
    <form action="8.php" method="get">
        <?php
        //obtener los datos de los clientes
        $clientes = "SELECT NombreCliente, CodigoCliente  FROM clientes";
        $clientesR = $cone->query($clientes);
        ?>

        <label for="cli">Selecciona el cliente:</label>
        <select name="cli" id="cli">
        <?php

        while ($row = $clientesR->fetch_assoc()) {
            echo "<option value='" . $row['NombreCliente'] . "'>" . $row['NombreCliente'] . "</option>";
        }
        ?>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
    $cli = $_GET["cli"];

    $query = "SELECT CodigoCliente FROM clientes WHERE NombreCliente='$cli'";
    $query3 = "SELECT p.FechaPedido, d.CodigoPedido, pr.Nombre, d.PrecioUnidad, d.Cantidad, SUM(d.PrecioUnidad * d.Cantidad) AS ImporteTotal
           FROM detallepedidos d
           JOIN productos pr ON d.CodigoProducto = pr.CodigoProducto
           JOIN pedidos p ON d.CodigoPedido = p.CodigoPedido
           WHERE CodigoCliente=($query)
           GROUP BY p.FechaPedido
           ORDER BY p.FechaPedido, d.PrecioUnidad";

    $result = $cone->query($query3);
    
    echo "<h1 style='color: blue;'>Listado de pedidos del cliente " .  $cli . "</h1>";
    if ($result->num_rows > 0) {
        echo "<table border='1' width='500px';>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th colspan='4'>Pedido Código " . $row['CodigoPedido'] . " de " . $row['FechaPedido'] . "</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Nombre del producto</th>";
            echo "<th>precio Unidad</th>";
            echo "<th>Cantidad</th>";
            echo "<th>Importe</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . $row['Nombre'] . "</td>";
            echo "<td>" . $row['PrecioUnidad'] . "</td>";
            echo "<td>" . $row['Cantidad'] . "</td>";
            echo "<td>" . $row['PrecioUnidad']*$row['Cantidad']  . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td colspan='3'>Importe total de este pedido</td>";
            echo "<td>" . $row['ImporteTotal'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
        echo $row['ImporteFinal'];
        echo "<br>";
        echo "<br>";
    } else {
        echo "No se encontraron resultados después de la actualización";
    }
    ?>
</body>
</html>