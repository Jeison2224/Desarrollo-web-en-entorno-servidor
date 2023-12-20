<!DOCTYPE html>
<html lang="es">
<head>
   <title>Adivina</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="estilosimple.css">
</head>

<body>
<?php

	// Incluimos el archivo con la definición de la Clase Usuario
	require_once("03_crear_clase_derivada_Usuario.php");

	// Se crea un objeto (una instanci) de la clase Usuario:
	$objUsuario = new Usuario("Marta", "Esteban Borque","M","10-12-2001","MEsteban","1234");
	/*Se interacciona con el objeto a través de sus métodos*/
	echo "Nombre: ".$objUsuario->getNombre()."<br/>";         // Devuelve: "Nombre: Marta"
	echo "Apellidos: ".$objUsuario->getApellidos()."<br/>";   // Devuelve: "Apellidos: Esteban Borque"

	echo "Usuario: ".$objUsuario->getNombreUsuario()."<br/>";	// Devuelve: "Usuario: MEsteban"
	echo "Contraseña: ".$objUsuario->getPassword()."<p/>";   // Devuelve: "Contraseña: 1234"
	echo "Nombre completo: ".$objUsuario->getNombreCompleto()."<p/>";   // Devuelve: "Nombre completo: Marta, Esteban Borque:MEsteban*1234"
	echo "Edad: ".$objUsuario->calculaEdad()."<br/>";	// Devuelve:22
?>
</body>
</html>
