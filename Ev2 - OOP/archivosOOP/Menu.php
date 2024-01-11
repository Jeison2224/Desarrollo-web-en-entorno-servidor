<?php
class Menu{
    private $dia;
    private $fecha;
    private $primerosPlatos = [];
    private $segundosPlatos = [];
    private $postres = [];


    public function __construct($dia, $fecha){
        $this->dia=$dia;
        $this->fecha=$fecha;
        $this->primerosPlatos;
        $this->segundosPlatos;
        $this->postres;
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
		return $this->primerosPlatos[] = $primerosPlatos;
	}

    public function getSegundosPlatos() {
		return $this->segundosPlatos;
	}

	public function setSegundosPlatos( $segundosPlatos ) {
		return $this->segundosPlatos[] = $segundosPlatos;
	}

    public function getPostres() {
		return $this->postres;
	}

	public function setPostres( $postres ) {
		return $this->postres[] = $postres;
	}
}
?>