<?php
namespace Example\Dao;

use Soluble\DbWrapper\Adapter\MysqliAdapter;
use Soluble\DbWrapper;
use Psr\Log\LoggerInterface;

class UserDao
{
    /**
     *
     * @var MysqliAdapter;
     */
    private $conector;
    /**
     *
     * @var LoggerInterface 
     */
    private $logger;
    public function __construct(MysqliAdapter $conector, LoggerInterface $logger) {
        $this->conector = $conector;
        $this->logger   = $logger;
    }
    function getConector() {
        $this->logger->debug("Aqui pase");
        return $this->conector;
    }


}