<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include "view.php";
include "gamas.php";

class GamasController {
    public function showAll()
    {
        $gamas = new Gamas();
        $data['gamas'] = $gamas->getAll();
        View::show("showAll", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"

}

?>