<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include "view.php";
include "productos.php";

class ProductosController {
    /*public function showAllForm() {
        $productos = new Productos();
        $data['productos'] = $productos->getAll();
        View::show("showAllForm", $data);
    }*/

    public function showAll()
    {
        $productos = new Productos();
        $data['productos'] = $productos->getAll();
        View::show("showAll", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"

}

?>