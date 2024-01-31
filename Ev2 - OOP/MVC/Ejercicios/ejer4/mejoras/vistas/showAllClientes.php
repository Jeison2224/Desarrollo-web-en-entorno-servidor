<?php
    include ("layouts/header.php");

	echo "<h1>Consulta de clientes por pais</h1><br>";

    $query = $data["clientes"];

    echo "<form action='index.php' method='GET'>";
    echo "<p>Elige un pais &nbsp;";
    echo "<select name='pais'>";

    foreach($query as $row) {
      echo "<option value='$row[0]'>". $row[0]."</option>";
    }

    echo "</select></p><br>";

    echo "<input type='hidden' name='controller' value='ClientesController'>";
    echo "<input type='hidden' name='action' value='showClientesByRange'>";

    echo "<p><input type='submit' name='enviar' value='Enviar consulta'></p>";
    echo "</form>";

    include ("layouts/footer.php");
?>
