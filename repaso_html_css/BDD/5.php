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
    <form action="5.php" method="get">
        <label for="nombre">Nombre cliente:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="nombreC">Nombre Contacto:</label>
        <input type="text" id="nombreC" name="nombreC" required><br>
        <label for="apellidoC">Apellido Contacto cliente:</label>
        <input type="text" id="apellidoC" name="apellidoC" required><br>
        <label for="tel">Telefono:</label>
        <input type="text" id="tel" name="tel" required><br>
        <label for="fax">Fax:</label>
        <input type="text" id="fax" name="fax" required><br>
        <label for="direccion1">Direccion 1:</label>
        <input type="text" id="direccion1" name="direccion1" required><br>
        <label for="direccion2">Direccion 2:</label>
        <input type="text" id="direccion2" name="direccion2" required><br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" id="ciudad" name="ciudad" required><br>
        <label for="region">Region:</label>
        <input type="text" id="region" name="region" required><br>
        <label for="pais">Pais:</label>
        <input type="text" id="pais" name="pais" required><br>
        <label for="codp">Codigo Postal:</label>
        <input type="text" id="codp" name="codp" required><br>
        <label for="limiteC">Limite credito:</label>
        <input type="text" id="limiteC" name="limiteC" required><br>
        <?php
        //optener los datos de los empleados
        $empleados_lista = "SELECT CodigoEmpleado, Nombre FROM empleados";
        $empleados_result = $cone->query($empleados_lista);
        ?>

        <label for="code">Código de Empleado:</label>
        <select name="code" id="code">
        <?php
        //el while que permite listar los nombres de los empleados con su codigo en el formulario
        while ($row = $empleados_result->fetch_assoc()) {
            echo "<option value='" . $row['CodigoEmpleado'] . "'>" . $row['Nombre'] . "</option>";
        }
        ?>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
    <?php

        //asignar los datos del formulario a las variables
        $_SERVER["REQUEST_METHOD"] == "GET";
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

        //conseguir el ultimo codigo y sumarle 1 para añadir un nuevo cliente
        $ultimoCodigo = "SELECT MAX(CodigoCliente) AS ultimo_cliente FROM clientes";
        $ultimoCodigoResult = $cone->query($ultimoCodigo);
        $ultimo_cliente = ($ultimoCodigoResult->fetch_assoc())['ultimo_cliente'];
        $nuevo_codigo_cliente = $ultimo_cliente + 1;

        //insertar datos en la base de datos (no olvidar las comillas simples o dobles para los string)
        $sql = "INSERT INTO clientes VALUES ($nuevo_codigo_cliente, '$nombre', '$nombreC', '$apellidoC', $tel, $fax, '$direccion1', '$direccion2', '$ciudad', '$region', '$pais', $codp, $code, $limiteC)";
        if  (mysqli_query($cone,$sql))
            echo "Se ha realizado con exito";
        else
            echo "Error";

    ?>
</body>
</html>