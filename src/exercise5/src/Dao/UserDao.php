<?php
namespace Example\Dao;

use Soluble\DbWrapper\Adapter\MysqliAdapter;


class UserDao
{
    /**
     *
     * @var MysqliAdapter;
     */
    private $conector;
    public function __construct(MysqliAdapter $conector) {
        $this->conector = $conector;
    }
    function getConector() {
        return $this->conector;
    }


}