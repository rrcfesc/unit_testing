<?php
/**
 * Rioxygen
 * @license  BS3-Clausule
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 */
namespace Rioxygen\Zf2AuthCore\Dao;

use \PHPUnit_Framework_TestCase;
use Rioxygen\Zf2AuthCore\Utils\Database;
use Rioxygen\Zf2AuthCore\Utils\Mocker;
use Rioxygen\Zf2AuthCore\Utils\UserTruncate;
use Zend\Log\Logger;
use Soluble\DbWrapper;

use Example\Dao\UserDao;
use \Bootstrap;


/**
 * Class to test User
 * @version 1.0
 */
class UserDaoTest extends PHPUnit_Framework_TestCase
{
    /**
     *
     * @var array
     */
    private $config;
    /**
     * @var \PDO
     */
    private $pdo;
    /**
     * @var Logger 
     */
    private $logger;
    /**
     * @var UserTruncate
     */
    private $truncate;
    /**
     * Initial Setup
     */
    public function setUp()
    {
        $config                 = Bootstrap::getConfig();
        $mocker                 = new Mocker();
        $this->truncate         = new UserTruncate();
        $this->config           = $config;
        $objDB                  = new Database($config['db']['host'], 
                $config['db']['dbname'], 
                $config['db']['user'], 
                $config['db']['password']);
        $this->pdo              = $objDB->getConnection();
        $this->logger           = $mocker->getLoggerMock();
        $this->pdo->exec($this->truncate->insert());
    }
    public function testInsert()
    {
        $conn = new \mysqli($this->config['db']['host'], $this->config['db']['user'], $this->config['db']['password'], $this->config['db']['dbname']);
        $conn->set_charset('UTF-8');
        $adapter = DbWrapper\AdapterFactory::createAdapterFromResource($conn);
        $userDao        = new UserDao($adapter);
        $total      = $userDao->getConector()->query("SELECT * from new_table")->count();
        $this->assertEquals(1, $total);
        $this->assertTrue(true);
    }
    /**
     * Truncate Table
     */
    public function tearDown()
    {
        $this->pdo->exec($this->truncate->unChainFk());
        $this->pdo->exec($this->truncate->userTable());
        $this->pdo->exec($this->truncate->chainFk());
    }
}