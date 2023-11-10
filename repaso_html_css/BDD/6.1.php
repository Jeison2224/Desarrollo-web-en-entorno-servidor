<?php
//conexion a la base de datos
$cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
or die ("no se pudo conectar");

mysqli_select_db ($cone, "jardineria")
or die ("no se pudo seleccionar la bbdd");

$_SERVER["REQUEST_METHOD"] == "GET";
$cli = $_GET["cli"];

//obtener los datos de los clientes
$clientes = "SELECT * FROM clientes where Telefono='62456810'";
$clientesRe = mysqli_query($cone,$clientes);

$nfilas = mysqli_num_rows ($clientesRe);

        if  ($nfilas > 0){
            print ("<table border='1'>");

            for ($i=0; $i<$nfilas; $i++)
            {
                $r = mysqli_fetch_array ($clientesRe);
                ?>
                <form style="border: 2px solid black;" action="5.php" method="get">
                    <label for="nombre" >Nombre cliente:</label>
                    <input type="text" id="nombre" name="nombre" value="<?php $r['NombreCliente'] ?>" required><br>
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
            }

            print ("</table>");
        }
        else
            print ("");

        mysqli_close    ($cone);
?>
