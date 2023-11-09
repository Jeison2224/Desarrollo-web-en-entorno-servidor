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

    <form action="6.1.php" method="get">
        <?php
        //optener los datos de los clientes
        $clientes = "SELECT NombreCliente, Telefono  FROM clientes";
        $clientesR = $cone->query($clientes);
        ?>

        <label for="cli">Selecciona el telefono del cliente:</label>
        <select name="cli" id="cli">
        <?php
        //el while que permite listar los nombres de los clientes con su telefono en el formulario
        while ($row = $clientesR->fetch_assoc()) {
            echo "<option value='" . $row['NombreCliente'] . "'>" . $row['Telefono'] . "</option>";
        }
        ?>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>