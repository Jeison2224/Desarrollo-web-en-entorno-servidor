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
}

?>
