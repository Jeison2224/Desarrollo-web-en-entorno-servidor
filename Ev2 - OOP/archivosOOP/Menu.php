<?php
class Menu{
    private $dia;
    private $fecha;
    private $primerosPlatos = array();
    private $segundosPlatos = array();
    private $postres = array();


    public function __construct($dia, $fecha, $primerosPlatos, $segundosPlatos, $postres){
        $this->dia=$dia;
        $this->fecha=$fecha;
        $this->primerosPlatos=$primerosPlatos;
        $this->segundosPlatos=$segundosPlatos;
        $this->postres=$postres;
    }

    public function getDia() {
		return $this->dia;
	}

	public function setDia( $dia ) {
		return $this->dia = $dia;
	}

    public function getFecha() {
		return $this->fecha;
	}

	public function setFecha( $fecha ) {
		return $this->fecha = $fecha;
	}

    public function getPrimerosPlatos() {
		return $this->primerosPlatos;
	}

	public function setPrimerosPlatos( $primerosPlatos ) {
		return $this->primerosPlatos = $primerosPlatos;
	}

    public function getSegundosPlatos() {
		return $this->segundosPlatos;
	}

	public function setSegundosPlatos( $segundosPlatos ) {
		return $this->segundosPlatos = $segundosPlatos;
	}

    public function getPostres() {
		return $this->postres;
	}

	public function setPostres( $postres ) {
		return $this->postres = $postres;
	}
}
?>