<?php

$_SERVER["REQUEST_METHOD"] == "GET";
$dia = $_GET["dias"];

$dias = [];

for ($i=0; $i < 7; $i++) {
    array_push($dias, $dia);
}

$media = array_sum($dias);

var_dump($dias);
echo $media;

?>