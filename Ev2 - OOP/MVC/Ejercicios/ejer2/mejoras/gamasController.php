<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include "view.php";
include "gamas.php";

class GamasController {
    public function showAllForm() {
        $gamas = new Gamas();
        $data['productos'] = $gamas->getAll();
        View::show("showAllForm", $data);
    }

    public function showAll()
    {
        $gamas = new Gamas();
        $data['productos'] = $gamas->getAll();
        View::show("showAll", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"

}

?>