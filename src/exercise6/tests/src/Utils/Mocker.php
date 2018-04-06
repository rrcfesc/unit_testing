<?php
/**
 * Rioxygen
 * @license  BS3-Clausule
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 */
namespace Rioxygen\Zf2AuthCore\Utils;

use \PHPUnit_Framework_TestCase;

/**
 * <p>Class to extract mocker</p>
 * @version 1.0
 */
class Mocker extends PHPUnit_Framework_TestCase
{
    public function getLoggerMock()
    {
        $loggerMock = $this->getMockBuilder('Psr\Log\AbstractLogger')
            ->disableOriginalConstructor()
            ->setMethods(array('addWriter','error','emergency','alert','critical','warning','notice','info','debug','log'))
            ->getMock();
        $loggerMock->expects($this->any())->method('error')
            ->will($this->returnValue(null));
        return $loggerMock;
    }
}