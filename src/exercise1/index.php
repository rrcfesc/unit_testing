<?php
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