<?php
/**
 * Rioxygen
 * @license  BS3-Clausule
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 */
namespace Rioxygen\Zf2AuthCore\Utils;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use PDOException;
use \PDO;

/**
 * Class to Util connect database for test
 * @version 1.0
 */
class Database
{
    /**
     * @var string
     */
    private $host;
    /**
     * @var string
     */
    private $user;
    /**
     * @var string
     */
    private $database;
    /**
     * @var string
     */
    private $conn;
    /**
     * @var string
     */
    private $password;
    /**
     * @var EntityManager
     */
    private $em;
    /**
     * <p>Construct</p>
     * @param string $host     HostDatabase
     * @param string $database Database
     * @param string $user     UserDatabase
     * @param string $password PasswordDatabase
     */
    public function __construct($host,$database,$user,$password)
    {
        $this->host =  $host;
        $this->database = $database;
        $this->user = $user;
        $this->password = $password;
    }
    /**
     * <p>Get EntityManager connection</p>
     * @param array $path   Path to Entity
     * @param array $params Connection Params
     * @return EntityManager
     */
    public function getEntityManager(array $path,array $params)
    {
        $driver = new AnnotationDriver(new AnnotationReader(), $path);
        $config = Setup::createAnnotationMetadataConfiguration($path,true);
        $config->setMetadataDriverImpl($driver);
        $conn = DriverManager::getConnection($params, $config); 
        $this->em = EntityManager::create($conn, $config);
        return $this->em;
    }
    /**
     * PDO connection Database
     * @return PDO $conn
     */
    public function getConnection()
    {
        try {
            $this->conn = new PDO ('mysql:host='.$this->host.
            ';dbname='.$this->database, $this->user, $this->password);
            return $this->conn;
        } catch (PDOException $ex) {
            echo 'ERROR: '. $ex->getMessage();
        }
    }
}
