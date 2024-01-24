<?php

class Racional {
    private $numerador;
    private $denominador;

    public function __construct($num = 1, $den = 1) {
        $this->setRacional($num, $den);
    }

    private function setRacional($num, $den) {
        $this->numerador = $num;
        $this->denominador = ($den != 0) ? $den : 1;
        $this->simplificar();
    }

    public function sumar(Racional $racional) {
        $this->numerador = $this->numerador * $racional->denominador + $racional->numerador * $this->denominador;
        $this->denominador = $this->denominador * $racional->denominador;
        $this->simplificar();
    }

    public function restar(Racional $racional) {
        $this->numerador = $this->numerador * $racional->denominador - $racional->numerador * $this->denominador;
        $this->denominador = $this->denominador * $racional->denominador;
        $this->simplificar();
    }

    public function multiplicar(Racional $racional) {
        $this->numerador = $this->numerador * $racional->numerador;
        $this->denominador = $this->denominador * $racional->denominador;
        $this->simplificar();
    }

    public function dividir(Racional $racional) {
        if ($racional->numerador != 0) {
            $this->numerador = $this->numerador * $racional->denominador;
            $this->denominador = $this->denominador * $racional->numerador;
            $this->simplificar();
        } else {
            echo "No es posible dividir por cero.";
        }
    }

    public function simplificar() {
        $gcd = $this->calcularMCD($this->numerador, $this->denominador);
        $this->numerador /= $gcd;
        $this->denominador /= $gcd;
    }

    private function calcularMCD($a, $b) {
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        return $a;
    }

    public function __toString() {
        return $this->numerador . '/' . $this->denominador;
    }
}

// Ejemplo de uso:

/*$racional1 = new Racional();
$racional2 = new Racional(5);
$racional3 = new Racional(5, 7);
$racional4 = new Racional("9/7");

$racional1->sumar($racional2);
echo "Suma (Racional 1 + Racional 2): $racional1\n";

$racional3->restar($racional4);
echo "Resta (Racional 3 - Racional 4): $racional3\n";

$racional2->multiplicar($racional4);
echo "Multiplicación (Racional 2 * Racional 4): $racional2\n";

$racional1->dividir($racional3);
echo "División (Racional 1 / Racional 3): $racional1\n";

echo "Racional 1: $racional1\n";
echo "Racional 2: $racional2\n";
echo "Racional 3: $racional3\n";
echo "Racional 4: $racional4\n";*/

