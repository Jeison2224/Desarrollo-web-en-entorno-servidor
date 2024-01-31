<?php

// Controlador. Debería tener un método por cada posible valor de la variable "action".
include_once ("clases/view.php");
include_once ("clases/clientes.php");

class ClientsController
{
    public function showClientes()
    {
        $clientes = new Clientes();
        $data['clientes'] = $clientes->getAllClientes();
        View::show("showAllClientes", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>
