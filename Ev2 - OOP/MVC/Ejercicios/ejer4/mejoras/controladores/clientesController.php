<?php
// Controlador. Debería tener un método por cada posible valor de la variable "action".
include_once ("clases/view.php");
include_once ("clases/clientes.php");

class ClientesController
{
    public function showClientes()
    {
        $clientes = new Clientes();
        $data['clientes'] = $clientes->getAllClientes();
        View::show("showAllClientes", $data);
    }

    public function showClientesByRange($pais)  {
        $clientes = new Clientes();
        $data['clientes'] = $clientes->getClientesByRange($pais);
        View::show("showClientesByRange", $data);
    }

    // Añadir a partir de aquí un método por cada posible valor de la variable "action"
}

?>
