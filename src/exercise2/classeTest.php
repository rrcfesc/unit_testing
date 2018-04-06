<?php
class classeTest
{
    public $elementoa;
    public $elemento2;
    public function __construct($a, $b) {
        $this->elementoa  = $a;
        $this->elemento2  = $b;
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


}