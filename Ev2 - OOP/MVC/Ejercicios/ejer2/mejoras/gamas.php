<?php

include "model.php";

class Gamas extends Model
{
    public function __construct()
    {
        parent::__construct("productos");
    }

    public function getGamas() {
        $gamas = $this->db->dataQuery('SELECT Gama, DescripcionTexto FROM gamasproductos ORDER BY DescripcionTexto');
        $this->db->closeConnection();
        return $gamas;
    }

    //Aquí puedes añadir métodos específicos para esta tabla

}
