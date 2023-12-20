<?php

	// Incluimos el archivo con la definición de la Clase de la que heredamos
	require_once("01_crear_clase_Persona.php");

//Ahora se define la Clase Usuario que es hija de la clase Persona.
//La clase hija Usuario hereda las propiedades y métodos de su case padre Persona.
//También puede añadir propiedades y métodos propios o sobreescribir los métodos de su clase padre.
//Los constructores también se heredan. Si una clase hija define un constructor propio, para heredar el de la madre es necesario indicarlo //con _parent::__construct()_:

class Usuario extends Persona
{
	// Propiedades específicas de esta clase. También hereda las de la clase padre.
	private $nombreUsuario;
	private $password;

	// Constructor: si no lo ponemos hereda el de la clase padre.
	function __construct($nom,$ape,$sexo,$fechaNaci,$usu,$pass) {
			/*Primero invocamos al constructor de su clase padre, si es útil*/
			parent::__construct($nom,$ape,$sexo,$fechaNaci);
			/*Después añadimos las acciones específicas para el constructor de esta clase*/
			$this->nombreUsuario=$usu;
			$this->password=$pass;
	}

	// Métodos específicos de esta clase. También hereda los de la clase padre.
	public function getNombreUsuario() {
		return $this->nombreUsuario;
	}

	public function setNombreUsuario( $nombreUsuario ) {
		return $this->nombreUsuario = $nombreUsuario;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword( $password ) {
		$this->password = $password;
	}

	/*Ejemplo de redefinición de un método de la clase padre*/
	public function getNombreCompleto()
	{
			$cadena=parent::getNombreCompleto(); /*Primero llamamos al método en la clase padre, si es útil*/
			return "$cadena: {$this->nombreUsuario}*{$this->password}";/*Después lo completamos*/
		//Sería equivalente a:
		//return "{$this->getNombre()}, {$this->getApellidos()}: {$this->nombreUsuario}*{$this->password}";
		/*Las llaves { } sirven para que resuelva dentro de las comillas*/
	}
}
?>
