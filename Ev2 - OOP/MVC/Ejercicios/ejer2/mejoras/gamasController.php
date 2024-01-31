<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include "view.php";
include "gamas.php";

class GamasController {
    public function showGamas() {
        $gamas = new Gamas();
        $data['productos'] = $gamas->getAll();
        View::show("showProducts", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"

}

?>