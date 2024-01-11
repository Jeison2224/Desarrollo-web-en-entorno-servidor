<?php
session_start();
require_once("prueba.php");

// Inicializa el objeto $menu o recupéralo de la sesión
if (!isset($_SESSION['menu'])) {
    $menu = new Menu();
} else {
    $menu = unserialize($_SESSION['menu']);
}

// Manejar la entrada del formulario para seleccionar día y fecha
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['dia']) && isset($_POST['fecha'])) {
    $menu->setDia($_POST['dia']);
    $menu->setFecha($_POST['fecha']);
}

// Manejar la entrada del formulario para añadir platos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['primerPlato'])) {
        $menu->addPrimerPlato($_POST['primerPlato']);
    }
    if (isset($_POST['segundoPlato'])) {
        $menu->addSegundoPlato($_POST['segundoPlato']);
    }
    if (isset($_POST['postre'])) {
        $menu->addPostre($_POST['postre']);
    }
}

// Guardar el objeto $menu en la sesión
$_SESSION['menu'] = serialize($menu);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confeccionar Menú</title>
</head>
<body>
    <h2>Confeccionar Menú</h2>

    <!-- Formulario para seleccionar día y fecha -->
    <?php if (!$menu->getDia() || !$menu->getFecha()): ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="dia">Día de la semana:</label>
            <input type="text" name="dia" required>
            <br>
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" required>
            <br>
            <input type="submit" value="Seleccionar Día y Fecha">
        </form>
    <?php endif; ?>

    <!-- Formulario para añadir platos -->
    <?php if ($menu->getDia() && $menu->getFecha()): ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h3><?php echo "Menú del " . $menu->getDia() . ", " . $menu->getFecha(); ?></h3>
            <label for="primerPlato">Primer Plato:</label>
            <input type="text" name="primerPlato" >
            <input type="submit" value="Añadir Primer Plato">
            <br>
            <?php foreach ($menu->getPrimerosPlatos() as $plato): ?>
                <?php echo $plato . "<br>"; ?>
            <?php endforeach; ?>

            <br>

            <label for="segundoPlato">Segundo Plato:</label>
            <input type="text" name="segundoPlato" >
            <input type="submit" value="Añadir Segundo Plato">
            <br>
            <?php foreach ($menu->getSegundosPlatos() as $plato): ?>
                <?php echo $plato . "<br>"; ?>
            <?php endforeach; ?>

            <br>

            <label for="postre">Postre:</label>
            <input type="text" name="postre" >
            <input type="submit" value="Añadir Postre">
            <br>
            <?php foreach ($menu->getPostres() as $postre): ?>
                <?php echo $postre . "<br>"; ?>
            <?php endforeach; ?>

            <br>
            <input type="submit" value="Confeccionar Carta">
        </form>
    <?php endif; ?>

    <!-- Presentación del menú -->
    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['primerPlato']) && isset($_POST['segundoPlato']) && isset($_POST['postre'])): ?>
        <h3>Menú Final</h3>
        <p>Día: <?php echo $menu->getDia(); ?></p>
        <p>Fecha: <?php echo $menu->getFecha(); ?></p>
        <p><strong>Primeros Platos:</strong></p>
        
            <?php foreach ($menu->getPrimerosPlatos() as $plato): ?>
                <?php echo $plato; ?><br>
            <?php endforeach; ?>
        
        <p><strong>Segundos Platos:</strong></p>
        
            <?php foreach ($menu->getSegundosPlatos() as $plato): ?>
                <?php echo $plato; ?><br>
            <?php endforeach; ?>
        
        <p><strong>Postres:</strong></p>
            <?php foreach ($menu->getPostres() as $postre): ?>
                <?php echo $postre; ?><br>
            <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>
