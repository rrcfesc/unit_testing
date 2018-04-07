<?php
class classe
{
    public $elementoa;
    public $elemento2;
    public $divisor;
    public function __construct($a, $b, $c) {
        $this->elementoa    = $a;
        $this->elemento2    = $b;
        $this->divisor      = $c;
    }
    function getElementoa() {
        return $this->elementoa;
    }

    function getElemento2() {
        return $this->elemento2;
    }

    function setElementoa($elementoa) {
        $this->elementoa = $elementoa;
    }

    function setElemento2($elemento2) {
        $this->elemento2 = $elemento2;
    }
    public function getResultado()
    {
        $suma = $this->elementoa + $this->elemento2;
        $resultado = $suma / $this->divisor;
        return $resultado;
    }
}