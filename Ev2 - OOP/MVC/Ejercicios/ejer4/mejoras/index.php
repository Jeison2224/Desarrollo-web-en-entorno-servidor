<?php

include "controladores/controllers.php";


if (!isset($_REQUEST['action'])) {
    $action = "showClientes";
} else {
    $action = $_REQUEST['action'];
}

if (!isset($_REQUEST['controller'])) {
    $controllerClassName = "clientes";
} else {
    $controllerClassName = $_REQUEST['controller'];
}

$controller = new $controllerClassName();

if(!isset($_REQUEST['clientes'])) {
    $controller->{$action}();
} else {
    $controller->{$action}($_REQUEST['clientes']);
}

?>