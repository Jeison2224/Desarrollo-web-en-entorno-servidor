<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Conexión a la base de datos
    $cone = mysqli_connect("localhost", "jardinero", "jardinero") or die("No se pudo conectar");

    mysqli_select_db($cone, "jardineria") or die("No se pudo seleccionar la bbdd");
    ?>

    <?php
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        // Obtener los datos del formulario
        $nombre = $_GET["nombre"];
        $nombreC = $_GET["nombreC"];
        $apellidoC = $_GET["apellidoC"];
        $tel = $_GET["tel"];
        $direccion1 = $_GET["direccion1"];
        $direccion2 = $_GET["direccion2"];
        $ciudad = $_GET["ciudad"];
        $region = $_GET["region"];
        $pais = $_GET["pais"];
        $codp = $_GET["codp"];
        $limiteC = $_GET["limiteC"];
        $code = $_GET["code"];
        $fax = $_GET["fax"];
        $codigoCliente = $_GET["codigoCliente"];

        // Realizar la actualización en la base de datos
        $sql = "UPDATE clientes SET
                Nombre='$nombre',
                NombreContacto='$nombreC',
                ApellidoContacto='$apellidoC',
                Telefono=$tel,
                Fax=$fax,
                Direccion1='$direccion1',
                Direccion2='$direccion2',
                Ciudad='$ciudad',
                Region='$region',
                Pais='$pais',
                CodigoPostal=$codp,
                CodigoEmpleado=$code,
                LimiteCredito=$limiteC
                WHERE CodigoCliente=$codigoCliente";

        if (mysqli_query($cone, $sql)) {
            echo "Se ha realizado con éxito la actualización";

            // Obtener los datos actualizados para mostrar en una tabla
            $query = "SELECT * FROM clientes WHERE CodigoCliente=$codigoCliente";
            $result = $cone->query($query);

            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr>";
                echo "<th>Código Cliente</th>";
                echo "<th>Nombre</th>";
                echo "<th>Nombre Contacto</th>";
                echo "<th>Apellido Contacto</th>";
                echo "</tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['CodigoCliente'] . "</td>";
                    echo "<td>" . $row['Nombre'] . "</td>";
                    echo "<td>" . $row['NombreContacto'] . "</td>";
                    echo "<td>" . $row['ApellidoContacto'] . "</td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "No se encontraron resultados después de la actualización";
            }
        } else {
            echo "Error en la actualización: " . mysqli_error($cone);
        }
    }
    ?>

    <form action="5.php" method="get">
        <label for="codigoCliente">Código de Cliente a Modificar:</label>
        <input type="text" id="codigoCliente" name="codigoCliente" required><br>
        <input type="submit" value="Modificar">
    </form>

</body>
</html>
