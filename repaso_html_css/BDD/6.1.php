<?php
//conexion a la base de datos
$cone = mysqli_connect   ("localhost", "jardinero", "jardinero")
or die ("no se pudo conectar");

mysqli_select_db ($cone, "jardineria")
or die ("no se pudo seleccionar la bbdd");

$_SERVER["REQUEST_METHOD"] == "GET";
$cli = $_GET["cli"];

//optener los datos de los clientes
$clientes = "SELECT CodigoCliente, NombreCliente, NombreContacto, ApellidoContacto  FROM clientes where Telefono=$cli";
$clientesR = $cone->query($clientes);

$nfilas = mysqli_num_rows ($clientesR);

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
                $r = mysqli_fetch_array ($clientesR);
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
            print ("");

        mysqli_close    ($cone);
?>
