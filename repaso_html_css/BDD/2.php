<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="2.php" method="get">
        <label for="name">elige una de las gamas de productos disponibles </label><br>
        <select id="gama" name="gama">
            <option value="Herramientas">Herramientas</option>
            <option value="Aromáticas">Aromáticas</option>
            <option value="Frutales">Frutales</option>
            <option value="Frutales">Herbaceas</option>
            <option value="Frutales">Ornamentales</option>
        </select><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        $_SERVER["REQUEST_METHOD"] == "GET";
        $Herramientas = $_GET["Herramientas"];
        $Aromáticas = $_GET["Aromáticas"];
        $Frutales = $_GET["Frutales"];
        $Herbaceas = $_GET["Herbaceas"];
        $Ornamentales = $_GET["Ornamentales"];
        $gama = $_GET["gama"];

        $cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
            or die ("no se pudo conectar");

        mysqli_select_db ($cone, "jardineria")
            or die ("no se pudo seleccionar la bbdd");

        if ($gama === "Herramientas") {
            $consulta = "SELECT * from productos where gama='Herramientas'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        elseif ($gama === "Aromáticas") {
            $consulta = "SELECT * from productos where gama='Aromáticas'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        elseif ($gama === "Frutales") {
            $consulta = "SELECT * from productos where gama='Frutales'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        elseif ($gama === "Herbaceas") {
            $consulta = "SELECT * from productos where gama='Herbaceas'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        else {
            $consulta = "SELECT * from productos where gama='Ornamentales'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }


        $nfilas = mysqli_num_rows ($resultado);

        if  ($nfilas > 0){
            print ("<table border='1'>");
            print ("<tr>");
            print ("<th>codigo producto</th>");
            print ("<th>nombre</th>");
            print ("<th>Cantidad en stock</th>");
            print ("</tr>");

            for ($i=0; $i<$nfilas; $i++)
            {
                $r = mysqli_fetch_array ($resultado);
                print ("<tr>");
                print ("<td>" . $r['CodigoProducto'] . "</td>");
                print ("<td>" . $r['Nombre'] . "</td>");
                print ("<td>" . $r['CantidadEnStock'] . "</td>");
                print ("</tr>");
            }

            print ("</table>");
        }
        else
            print ("No hay noticias disponibles");

        mysqli_close    ($cone);
    ?>
</body>
</html>