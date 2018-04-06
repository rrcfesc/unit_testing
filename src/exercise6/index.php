<?php
date_default_timezone_set('America/Mexico_City');
require_once './vendor/autoload.php';
require_once './tests/Bootstrap.php';

use Example\Dao\UserDao;
use Soluble\DbWrapper;

$config  = Bootstrap::getConfig();

$conn = new \mysqli($config['db']['host'], $config['db']['user'], $config['db']['password'], $config['db']['dbname']);
$conn->set_charset('UTF-8');
$adapter = DbWrapper\AdapterFactory::createAdapterFromResource($conn);

$logger = new \Wa72\SimpleLogger\FileLogger('./logger.log');

$userDao        = new UserDao($adapter, $logger);
$total      = $userDao->getConector()->query("SELECT * from new_table")->count();

var_dump($total);