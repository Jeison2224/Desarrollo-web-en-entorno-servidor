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
    $cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
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
    $query2 = "SELECT * FROM pedidos WHERE CodigoCliente=($query)";
    $query3 = "SELECT * FROM detallepedidos d JOIN pedidos p on d.CodigoPedido = p.CodigoPedido WHERE CodigoCliente=($query)";
    $result = $cone->query($query3);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<th colspan='3'>Pedido Código " . $row['CodigoPedido'] . " de " . $row['FechaPedido'] . "</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Nombre del producto</th>";
            echo "<th>precio Unidad</th>";
            echo "<th>Cantidad</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . $row['CodigoPedido'] . "</td>";
            echo "<td>" . $row['PrcioUnidad'] . "</td>";
            echo "<td>" . $row['Cantidad'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron resultados después de la actualización";
    }
    ?>
</body>
</html>