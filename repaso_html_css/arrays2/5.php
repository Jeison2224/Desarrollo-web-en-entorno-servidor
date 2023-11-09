<?php
$palabras = array("telefono", "puerto", "buenas", "noches", "remix", "midnight", "new", "puesto", "acho", "F");

foreach ($palabras as $key => $value) {
    natcasesort($palabras);
    echo "$value <br>";
}

?>