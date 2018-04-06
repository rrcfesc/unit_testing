<?php
/**
 * Este archivo es un ejemplo de una clase y por que se deben de hacer TDD
 * En este ejemplo en el ultimo echo tiene algunas lineas con signos de interrogacion ///???
 * Cual es la salida que debería de salir??
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 */
class ejemplo2
{
    public $attr;
    function getAttr() {
        return $this->attr;
    }

    function setAttr($attr) {
        $this->attr = $attr;
    }
}


$class1         = new ejemplo2();
$class1->setAttr(1);
echo $class1->getAttr(); //output 1
echo "<br>\n";
$class2         = $class1;
$class2->setAttr(1000);
echo $class2->getAttr(); //output 1000
echo "<br>\n";
echo $class1->getAttr(); // ???
echo "<br>\n";
echo "<a href='/exercise2/'>Ejercicio 2</a>";