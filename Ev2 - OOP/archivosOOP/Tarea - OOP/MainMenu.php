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
        session_start();
        require_once("Menu.php");

            if ($_REQUEST){

                if (!isset($_SESSION['menu'])) {
                    $menu = new Menu($dia, $fecha);
                } else {
                    $menu = unserialize($_SESSION['menu']);
                }

                if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                    if (isset($_GET['primerosPlatos'])) {
                        $menu->setPrimerosPlatos($_GET['primerosPlatos']);
                    }
                    if (isset($_GET['segundosPlatos'])) {
                        $menu->setSegundosPlatos($_GET['segundosPlatos']);
                    }
                    if (isset($_GET['postres'])) {
                        $menu->setPostres($_GET['postres']);
                    }
                }


                if (isset($_GET['Añadir1']) || isset($_GET['Añadir2']) || isset($_GET['Añadir3'])){
                    echo "<h2>Menú del " . $menu->getDia() . ", " . $menu->getFecha() . "</h2>";
                    echo "<form action='' method='get'>
                            <h3>Primeros platos</h3>";

                    $primerosPlatos = $menu->getPrimerosPlatos();
                    $numPrimerosPlatos = count($primerosPlatos);

                    /*foreach ($primerosPlatos as $index => $plato) {
                        echo "$plato\n";
                    }*/

                    foreach ($primerosPlatos as $index => $plato) { 
                        echo $plato; 
                        if (!empty($plato)) { 
                            echo "<br>"; 
                        } 
                    }

                    echo "<input type='text' name='primerosPlatos'>
                        <input type='submit' value='Añadir' name='Añadir1'><br>
                        <h3>Segundos platos</h3>";

                    $segundosPlatos = $menu->getSegundosPlatos();
                    $numSegundosPlatos = count($segundosPlatos);

                    /*foreach ($segundosPlatos as $index => $plato) {
                        echo "$plato\n";
                    }*/

                    foreach ($segundosPlatos as $index => $plato) { 
                        echo $plato; 
                        if (!empty($plato)) { 
                            echo "<br>"; 
                        } 
                    }

                    echo "<input type='text' name='segundosPlatos'>
                        <input type='submit' value='Añadir' name='Añadir2'><br>
                        <h3>Postres</h3>";

                    $postres = $menu->getPostres();
                    $numPostres = count($postres);

                    /*foreach ($postres as $index => $plato) {
                        echo "$plato\n";
                    }*/

                    foreach ($postres as $index => $plato) { 
                        echo $plato; 
                        if (!empty($plato)) { 
                            echo "<br>"; 
                        } 
                    }

                    echo "<input type='text' name='postres'>
                        <input type='submit' value='Añadir' name='Añadir3'><br><br><br>
                        <input type='submit' value='Confeccionar carta' name='confe'>
                    </form>";
                    
                    $_SESSION['menu'] = serialize($menu);
                    //session_destroy();
                    
                }
                elseif (isset($_GET["confe"])) {
                    ?>
                        <div class="confe">
                            <img src="images/imgA.png" alt="">
                            <h2>Menú del día</h2>
                            <?php echo "<h3>" . $menu->getDia() . ", " . $menu->getFecha() . "</h3>"; ?>
                            <br><br>
                            <h3>Primeros platos</h3>
                            <?php foreach ($menu->getPrimerosPlatos() as $plato) {
                            echo $plato ;
                            if (!empty($plato)) { 
                                echo "<br>"; 
                            } 
                            }?><br>
                            <h3>Segundos platos</h3>
                            <?php foreach ($menu->getSegundosPlatos() as $plato) {
                            echo $plato ;
                            if (!empty($plato)) { 
                                echo "<br>"; 
                            } 
                            }?><br>
                            <h3>Postres</h3>
                            <?php foreach ($menu->getPostres() as $plato) {
                            echo $plato ;
                            if (!empty($plato)) { 
                                echo "<br>"; 
                            } 
                            }?>
                            <img src="images/imgD.png" alt="">
                        </div>
                    <?php
                }
                else {
                    echo "<h2>Menú del " . $menu->getDia() . ", " . $menu->getFecha() . "</h2>";
                    echo "<form action='' method='get'>
                        <h3>Primeros platos</h3>
                        <input type='text' name='primerosPlatos'>
                        <input type='submit' value='Añadir' name='Añadir1'><br>
                        <h3>Segundos platos</h3>
                        <input type='text' name='segundosPlatos'>
                        <input type='submit' value='Añadir' name='Añadir2'><br>
                        <h3>Postres</h3>
                        <input type='text' name='postres'>
                        <input type='submit' value='Añadir' name='Añadir3'>
                    </form>";
                    $_SESSION['menu'] = serialize($menu);
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