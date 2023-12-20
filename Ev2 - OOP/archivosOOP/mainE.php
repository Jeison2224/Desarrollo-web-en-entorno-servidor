<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase Empleado</title>
</head>
<body>
    <?php


        require_once("Empleado.php");

        // Crear un objeto, es decir una instancia, de la clase Persona:
        $emp = new Empleado("Pedro","Agustin De La Paz","H","3-8-2002","Programador",2000);
        /*Se interacciona con el objeto a través de sus métodos*/
        echo "Nombre: ".$emp->getNombre()."<br/>";			// Devuelve: "Nombre: Manuel"
        echo "Apellidos: ".$emp->getApellidos()."<br/>";	// Devuelve: "Apellidos: Sánchez Pérez"
        echo "Sexo: ".$emp->getSexo()."<br/>";	// Devuelve: H
        echo "Nombre completo: ".$emp->getNombreCompleto()."<br/>";	// Devuelve: Manuel, Sanchéz Pérez
        echo "Edad: ".$emp->calculaEdad()."<br/>";	// Devuelve:23
        echo "Puesto: ".$emp->getPuesto()."<br/>";
        echo "Sueldo: ".$emp->getSueldo()."€ ".$emp->pagar()."<br/>";
    ?>
</body>
</html>