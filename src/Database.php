<?php

namespace xpressxd;
use Exception;
use mysqli;

class Database {
    public const USER_TABLE = "users";
    private static ?Database $instance = null;
    private ?mysqli $conn;

    protected function __construct()
    {
        try {
            $config = include($_ENV["config_root"]."config.php");
            $config = $config['mysql'];
            $this->conn = new mysqli($config['host'], $config['user'], $config['pass'], $config['db']);
        } catch(Exception) {
            $this->conn = null;
        }
    }

    function __destruct()
    {
        $this->conn?->close();
    }

    public static function getInstance(): Database
    {
        if(self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public static function getDbConnection(): ?mysqli
    {
        return self::getInstance()->conn;
    }
}

return Database::getDbConnection();