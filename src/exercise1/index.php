<?php
/**
 * Este archivo es un ejemplo de una clase
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 */
class example1{
    protected $foo;

    /**
     * @return mixed
     */
    public function getFoo()
    {
        return $this->foo;
    }

    /**
     * @param mixed $foo
     */
    public function setFoo($foo)
    {
        $this->foo = $foo;
    }


}
function changeExample($param) {
    $param->setFoo('blah');
    return $param->getFoo();
}

$obj        = new example1();
$obj->setFoo("bar");
echo $obj->getFoo();
echo "<br>\n";
echo changeExample($obj);
echo "<br>\n";
echo $obj->getFoo();
echo "<br>\n";

echo "<a href='index2.php'>Ejemplo2</a>";