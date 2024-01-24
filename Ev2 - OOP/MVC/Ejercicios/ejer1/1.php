<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
            or die ("no se pudo conectar");

        mysqli_select_db ($cone, "jardineria")
            or die ("no se pudo seleccionar la bbdd");

        $consulta = "SELECT * from clientes";
        $resultado = mysqli_query($cone, $consulta)
            or die ("Fallo en la consulta");

        $nfilas = mysqli_num_rows ($resultado);
        if  ($nfilas > 0){
            print ("<table border='1'>");
            print ("<tr>");
            print ("<th>codigo cliente</th>");
            print ("<th>nombre cliente</th>");
            print ("<th>nombre contacto</th>");
            print ("</tr>");

            for ($i=0; $i<$nfilas; $i++)
            {
                $r = mysqli_fetch_array ($resultado);
                print ("<tr>");
                print ("<td>" . $r['CodigoCliente'] . "</td>");
                print ("<td>" . $r['NombreCliente'] . "</td>");
                print ("<td>" . $r['NombreContacto'] . "</td>");
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