<!DOCTYPE html>
<html lang="es">
<head>
   <title>Clase Persona</title>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="estilosimple.css">
</head>

<body>
<?php
	// Incluimos el archivo con la definición de la Clase Persona
	require_once("01_crear_clase_Persona.php");

	// Crear un objeto, es decir una instancia, de la clase Persona:
	$objPersona = new Persona("Manuel","Sánchez Pérez","H","3-12-2000");
	/*Se interacciona con el objeto a través de sus métodos*/
	echo "Nombre: ".$objPersona->getNombre()."<br/>";			// Devuelve: "Nombre: Manuel"
	echo "Apellidos: ".$objPersona->getApellidos()."<br/>";	// Devuelve: "Apellidos: Sánchez Pérez"
	echo "Sexo: ".$objPersona->getSexo()."<br/>";	// Devuelve: H
	echo "Nombre completo: ".$objPersona->getNombreCompleto()."<br/>";	// Devuelve: Manuel, Sanchéz Pérez
	echo "Edad: ".$objPersona->calculaEdad()."<br/>";	// Devuelve:23
?>
</body>
</html>