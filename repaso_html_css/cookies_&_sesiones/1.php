<?php
$_SERVER["REQUEST_METHOD"] == "GET";
$nombre = $_GET['nombre'];
$color = $_GET['color'];
setcookie("nombre", $nombre, time()+3600, "/", "");
setcookie("color", $color, time()+3600, "/", "");
$xd =  $_COOKIE['color'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:<?php $xd ?>;
        }
    </style>
</head>
<body>
    <h3><?php $_COOKIE['nombre'] ?></h3>
</body>
</html>