<?php


	require_once("01_crear_clase_Persona.php");


class Empleado extends Persona
{

	private $puesto;
	private $sueldo;


	function __construct($nom,$ape,$sexo,$fechaNaci,$puesto,$sueldo) {

			parent::__construct($nom,$ape,$sexo,$fechaNaci);

			$this->puesto=$puesto;
			$this->sueldo=$sueldo;
	}


	public function getPuesto() {
		return $this->puesto;
	}

	public function setPuesto( $puesto ) {
		return $this->puesto = $puesto;
	}

	public function getSueldo() {
		return $this->sueldo;
	}

	public function setSueldo( $sueldo ) {
		$this->sueldo = $sueldo;
	}

    public function pagar(){
        $s = $this->sueldo;
        if ($s >= 2000) {
            return "Debe pagar impuestos";
        }
        else {
            return "No debe pagar impuestos";
        }
    }
}
?>
