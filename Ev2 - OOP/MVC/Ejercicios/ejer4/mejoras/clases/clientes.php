<?php

include_once ("model.php");

class Clientes extends Model
{
    public function __construct()
    {
        parent::__construct("clientes");
    }

    public function getAllClientes()
    {
        $clients = $this->db->dataQuery('SELECT pais from Clientes order by pais');
        $this->db->closeConnection();
        return $clients;
    }

    public function getClientesByRange($pais) {
        $clientes = $this->db->dataQuery("SELECT CodigoCliente, NombreCliente, NombreContacto, ApellidoContacto from Clientes where Pais='$pais'");
        $this->db->closeConnection();
        return $clientes;
    }
}

?>
