<?php

include "gamasController.php";

// Miramos a ver si se indica alguna acción en la URL
if (!isset($_REQUEST['action'])) {
    // No hay acción en la URL. Usamos la acción por defecto (main). Puedes cambiarla por cualquier otra que vaya bien con tu aplicación.
    $action = "showGamas";
} else {
    // Sí hay acción en la URL. Recuperamos su nombre.
    $action = $_REQUEST['action'];
}

//
if (!isset($_REQUEST['gama'])) {
    // No hay acción en la URL. Usamos la acción por defecto (main). Puedes cambiarla por cualquier otra que vaya bien con tu aplicación.
    $controller->{$action}();
} else {
    // Sí hay acción en la URL. Recuperamos su nombre.
    $controller->{$action}($_REQUEST['gama']);
}

// Hacemos lo mismo con el nombre del controlador
if (!isset($_REQUEST['controller'])) {
    // No hay controlador en la URL. Asignaremos un controlador por defecto (Articles). Por supuesto, puedes cambiarlo por otro que vaya bien con tu aplicación.
    $controllerClassName = "GamasController";
} else {
    // Sí hay controlador en la URL. Recuperamos su nombre.
    $controllerClassName = $_REQUEST['controller'];
}

?>