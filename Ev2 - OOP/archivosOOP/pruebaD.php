if (isset($_GET['Añadir1']) || isset($_GET['Añadir2']) || isset($_GET['Añadir3'])){
    echo "<h2>Menú del " . $men->getDia() . ", " . $men->getFecha() . "</h2>";
    echo "<form action='' method='get'>
            <h3>Primeros platos</h3><br>";

    $primerosPlatos = $men->getPrimerosPlatos();
    $numPrimerosPlatos = count($primerosPlatos);

    foreach ($primerosPlatos as $index => $plato) {
        echo $plato;
        if ($index < $numPrimerosPlatos - 1) {
            echo "<br>";
        }
    }

    echo "<input type='text' name='primerosPlatos'>
        <input type='submit' value='Añadir' name='Añadir1'><br>
        <h3>Segundos platos</h3><br>";

    $segundosPlatos = $men->getSegundosPlatos();
    $numSegundosPlatos = count($segundosPlatos);

    foreach ($segundosPlatos as $index => $plato) {
        echo $plato;
        if ($index < $numSegundosPlatos - 1) {
            echo "<br>";
        }
    }

    echo "<input type='text' name='segundosPlatos'>
        <input type='submit' value='Añadir' name='Añadir2'><br>
        <h3>Postres</h3><br>";

    $postres = $men->getPostres();
    $numPostres = count($postres);

    foreach ($postres as $index => $plato) {
        echo $plato;
        if ($index < $numPostres - 1) {
            echo "<br>";
        }
    }

    echo "<input type='text' name='postres'>
        <input type='submit' value='Añadir' name='Añadir3'><br><br><br>
        <input type='submit' value='Confeccionar carta' name='confe'>
    </form>";

    $_SESSION['menu'] = serialize($men);
}
