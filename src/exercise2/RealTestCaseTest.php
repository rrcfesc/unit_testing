<?php
require_once './classe.php';

use PHPUnit\Framework\TestCase;

class RealTestCaseTest extends TestCase
{
    public function testMiPrimer()
    {
        $classTest    = new classe(10, 8, 3);
        $resultado    = $classTest->getResultado();
        $this->assertTrue((6 == $resultado));
    }
}