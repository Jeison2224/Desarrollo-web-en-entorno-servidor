<h1>Listado de productos</h1>

     <?php
   // Enviar consulta
   /*$instruccionSQL="SELECT productos.Gama, gamasproductos.DescripcionTexto, COUNT(*) FROM productos INNER JOIN gamasproductos ON productos.Gama=gamasproductos.Gama GROUP BY productos.Gama";
   $resulconsulta = mysqli_query ($conexion,$instruccionSQL)
      or die ("Fallo en la consulta");*/

   // Mostrar resultados de la consulta
   //$nfilas = mysqli_num_rows ($resulconsulta);
   $productos = $data['productos'];
   $i = 0;
      print ("<table>");
      print ("<tr>");
      print ("<th>Gama</th>");
      print ("<th>Descripción</th>");
      print ("<th>Nº de productos</th>");
      print ("</tr>");
   foreach($productos as $producto)
   {
         print ("<tr>");
         print ("<td>" . $producto[2] . "</td>");
         print ("<td>" . $producto[5] . "</td>");
         print ("<td>" . $producto[6] . "</td>");
         print ("</tr>");

   }
   print ("</table>");
     ?>
</table>