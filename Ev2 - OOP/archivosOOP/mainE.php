<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Clase Empleados</title>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>
</head>
<body>
    <header>
        <h1>Clase Empleados</h1>
    </header>
    <section>
        <nav></nav>
        <main>
<?php
    require_once("Empleado.php");
    $emp = new Empleado("Pedro","Agustin De La Paz","H","3-8-2002","Programador",1200);
    echo $emp->imprime();
?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>