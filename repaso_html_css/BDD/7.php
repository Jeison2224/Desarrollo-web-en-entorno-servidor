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

    <form action="7.php" method="get">
        <label for="cli">Escribe el telefono del cliente:</label>
        <input type="text" id="tel" name="tel" required><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
    $_SERVER["REQUEST_METHOD"] == "GET";
    $tel = $_GET["tel"];
    // Obtener los datos actualizados para mostrar en una tabla
    $query = "SELECT * FROM clientes WHERE Telefono='$tel'";
    $result = $cone->query($query);

    if ($result->num_rows > 0) {
        echo "<ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li>CodigoCliente: " . $row['CodigoCliente'] . "</li>";
            echo "<li>NombreCliente: " . $row['NombreCliente'] . "</li>";
            echo "<li>NombreContacto: " . $row['NombreContacto'] . "</li>";
            echo "<li>ApellidoContacto: " . $row['ApellidoContacto'] . "</li>";
            echo "<li>Telefono: " . $row['Telefono'] . "</li>";
            echo "<li>Fax: " . $row['Fax'] . "</li>";
            echo "<li>LineaDireccion1: " . $row['LineaDireccion1'] . "</li>";
            echo "<li>LineaDireccion2: " . $row['LineaDireccion2'] . "</li>";
            echo "<li>Ciudad: " . $row['Ciudad'] . "</li>";
            echo "<li>Region: " . $row['Region'] . "</li>";
            echo "<li>Pais: " . $row['Pais'] . "</li>";
            echo "<li>CodigoPostal: " . $row['CodigoPostal'] . "</li>";
            echo "<li>CodigoEmpleadoRepVentas: " . $row['CodigoEmpleadoRepVentas'] . "</li>";
            echo "<li>LimiteCredito: " . $row['LimiteCredito'] . "</li>";
        }
        echo "</ul>";
        ?>
        <form action="7.php" method="get">
            <label for="sino">¿Quieres eliminar este cliente?</label><br>

            <input type="submit" id="si" value="Si">
            <input type="submit" id="si" value="No">
        </form>
        <?php
    } else {
        echo "No se encontraron resultados";
    }

    //proceso de borrado
    $si = $_GET["si"];

    if ($si === "si") {
        echo "c mamo";
    }
    else {
        echo "what a save";
        echo "<a href='7.php'>Hacer otra conversión</a>";
    }

    ?>
</body>
</html>