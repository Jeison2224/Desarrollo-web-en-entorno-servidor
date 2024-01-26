<?php
      //include("model.php");
      echo "<h1>Consulta de productos por gama</h1><br>";

	   /*$instruccion = "SELECT Gama, DescripcionTexto FROM  gamasproductos ORDER BY DescripcionTexto";
      $resconsulta = mysqli_query ($conexion,$instruccion)
         or die ("Fallo en la consulta");*/

	   echo "<form action='index.php' method='GET'>";
	   echo "<p>Elige una de las gamas de productos disponible &nbsp;";
	   echo "<select name='gama'>";

	   $productos = $data['productos'];
        foreach($productos as $producto)
        {
		   	echo "<option value='$producto[2]'>". $producto[2]."</option>";
		   }
	   echo "</select></p><br>";
	   echo "<p><input type='submit' name='action' value='Enviar consulta'></p>";
	   echo "</form>";

   // Cerrar conexión