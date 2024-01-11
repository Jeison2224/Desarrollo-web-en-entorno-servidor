<?php
class Menu {
    private $dia;
    private $fecha;
    private $primerosPlatos = [];
    private $segundosPlatos = [];
    private $postres = [];

    public function __construct(){
        $this->dia;
        $this->fecha;
        $this->primerosPlatos;
        $this->segundosPlatos;
        $this->postres;
    }
    public function setDia($dia) {
        $this->dia = $dia;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function addPrimerPlato($plato) {
        $this->primerosPlatos[] = $plato;
    }

    public function addSegundoPlato($plato) {
        $this->segundosPlatos[] = $plato;
    }

    public function addPostre($postre) {
        $this->postres[] = $postre;
    }

    public function getDia() {
        return $this->dia;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function getPrimerosPlatos() {
        return $this->primerosPlatos;
    }

    public function getSegundosPlatos() {
        return $this->segundosPlatos;
    }

    public function getPostres() {
        return $this->postres;
    }
}
?>
