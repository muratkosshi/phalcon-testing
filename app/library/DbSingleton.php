<?php
namespace App\library;

use Phalcon\Db\Adapter\Pdo\Mysql as MysqlPdo;

class DbSingleton
{
    private static $instance = null;
    private $connection;

    private function __construct()
    {
        $this->connection = new MysqlPdo([
            'host'        => 'phalcon_app_db',
            'username'    => 'murat_developer',
            'password'    => 'password',
            'dbname'      => 'phalcon_app_db',
        ]);
    }

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new DbSingleton();
        }

        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
