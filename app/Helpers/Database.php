<?php

namespace App\Helpers;

use PDO;
use PDOException;

class Database
{
    protected static $instance;
    public static $config;

    protected function __construct()
    {
    }

    public static function loadConfig(array $config)
    {
        // var_dump($config);exit;
        self::$config = $config;
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {

            if (empty(self::$config)) {
                throw new \Exception('DB config is not loaded');
            }

            try {

                $host = self::$config['db_host'];
                $user = self::$config['db_user'];
                $password = self::$config['db_password'];
                $db_name = self::$config['db_name'];

                // var_dump(self::$config);
                // exit;


                $dsn = "mysql:host=$host;dbname=$db_name;charset=utf8mb4";
                self::$instance = new PDO($dsn, $user, $password);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $erro) {
                echo $erro->getMessage();
                exit;
            }
            return self::$instance;
        }
        return self::$instance;
    }
}
