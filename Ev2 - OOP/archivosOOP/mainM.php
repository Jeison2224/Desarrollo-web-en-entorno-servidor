<!DOCTYPE HTML>
<html lang="es-ES">
<head>
     <meta charset="utf-8" />
	<title>Clase Menu</title>
    <link rel="stylesheet" type="text/css" href="estilo1.css">
	<link rel="stylesheet" type="text/css" href="estilo2.css"/>
</head>
<body>
    <header>
        <h1>Restaurante</h1>
    </header>
    <section>
        <nav></nav>
        <main>
        <?php
        require_once("Menu.php");

            if ($_REQUEST){
                $dia = $_GET["dia"];
                $fecha = $_GET["fecha"];
                $men = new Menu($dia, $fecha);

                if ($_REQUEST["Añadir"]){

                    $men2 = unserialize($s);

                    $primero = $_GET["primerosPlatos"];
                    $segundo = $_GET["segundosPlatos"];
                    $postres = $_GET["postres"];

                    $men->setPrimerosPlatos($primero);
                    $men->setSegundosPlatos($segundo);
                    $men->setPostres($postres);

                    $men2->setPrimerosPlatos($primero);
                    $men2->setSegundosPlatos($segundo);
                    $men2->setPostres($postres);

                    echo "<h2>Menú del $dia, $fecha</h2>";
                    echo "<form action='' method='get'>
                        <h3>Primeros platos</h3>
                        <input type='text' name='primerosPlatos[]'>
                        <input type='submit' value='Añadir'><br>
                        <h3>Segundos platos</h3>
                        <input type='text' name='segundosPlatos[]'>
                        <input type='submit' value='Añadir'><br>
                        <h3>Postres</h3>
                        <input type='text' name='postres[]'>
                        <input type='submit' value='Añadir'><br><br><br>
                        <input type='submit' value='Confeccionar carta'>
                    </form>";

                    $s = serialize($men);

                }
                else {
                    echo "<h2>Menú del $dia, $fecha</h2>";
                    echo "<form action='' method='get'>
                        <h3>Primeros platos</h3>
                        <input type='text' name='primerosPlatos[]'>
                        <input type='submit' value='Añadir'><br>
                        <h3>Segundos platos</h3>
                        <input type='text' name='segundosPlatos[]'>
                        <input type='submit' value='Añadir'><br>
                        <h3>Postres</h3>
                        <input type='text' name='postres[]'>
                        <input type='submit' value='Añadir'>
                    </form>";
                }
            }
            else {
                ?>
                <h2>Configuración del menú del día</h2>
                <form action="" method="get">
                    <label for="dia">Día de la semana: </label>
                    <input type="text" name="dia" id="dia"><br><br>
                    <label for="fecha">Fecha: </label>
                    <input type="date" name="fecha" id="fecha"><br>
                    <input type="submit" value="Diseñar menú">
                </form>
                <?php
            }

        ?>
		</main>
		<aside></aside>
	</section>
	<footer></footer>
</body>
</html>