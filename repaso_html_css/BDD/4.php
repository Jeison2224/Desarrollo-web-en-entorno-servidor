<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4.php" method="get">
        <label for="name">elige uno de los paises disponibles </label><br>
        <select id="pais" name="pais">
            <option value="España">España</option>
            <option value="Spain">Spain</option>
            <option value="USA">USA</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
    <?php
        $_SERVER["REQUEST_METHOD"] == "GET";
        $España = $_GET["España"];
        $Spain = $_GET["Spain"];
        $USA = $_GET["USA"];
        $pais = $_GET["pais"];

        $cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
            or die ("no se pudo conectar");

        mysqli_select_db ($cone, "jardineria")
            or die ("no se pudo seleccionar la bbdd");

        if ($pais === "España") {
            $consulta = "SELECT * from clientes where pais='España'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        elseif ($pais === "Spain") {
            $consulta = "SELECT * from clientes where pais='Spain'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }
        elseif ($pais === "USA") {
            $consulta = "SELECT * from clientes where pais='USA'";
            $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");
        }


        $nfilas = mysqli_num_rows ($resultado);

        if  ($nfilas > 0){
            print ("<table border='1'>");
            print ("<tr>");
            print ("<th>codigo</th>");
            print ("<th>nombre</th>");
            print ("<th>nombre contacto</th>");
            print ("<th>apellido contacto</th>");
            print ("</tr>");

            for ($i=0; $i<$nfilas; $i++)
            {
                $r = mysqli_fetch_array ($resultado);
                print ("<tr>");
                print ("<td>" . $r['CodigoCliente'] . "</td>");
                print ("<td>" . $r['NombreCliente'] . "</td>");
                print ("<td>" . $r['NombreContacto'] . "</td>");
                print ("<td>" . $r['ApellidoContacto'] . "</td>");
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