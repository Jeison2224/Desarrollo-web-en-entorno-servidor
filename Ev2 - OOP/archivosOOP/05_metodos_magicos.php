<?php
class Racional {
    private $num;
    private $den;

    public function __construct($num, $den){
        $this->num = $num;
        $this->den = $den;
    }
    public function __toString(){ return ("$this->num/$this->den"); }

    public function __call($funcion, $argumentos){
        echo "<h2>Has invocado a un método que no existe en esta clase </h2>";
        echo "Nombre de la función <strong>$funcion</strong><br />";
        echo "Lista de parámetros<br />";
        foreach ($argumentos as $param => $valor){

          echo "parámetro <strong>$param</strong> = <strong>".print_r($valor, true).
                "</strong> <br />";
        //Poner en print_r el segundo parámetro a true hace que, en lugar de imprimir, retorne el valor.
        }
    }
}

$r1 = new Racional (8,5);
echo "Valor del objeto r1 = $r1";

$r1 = new Racional(5,4);
$r1->metodoInventado1(5,4,5,6,7);
$r1->otroMetodoSinParametros();
$r1->otroMetodo([1,2,3],"parametro2", 5,"ultimo parametro");
?>