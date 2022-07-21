<?php

namespace APP\Model;

use PDO;

class Connection
{
    private static PDO $connection;

    private function __construct()
    {
    }

    public static function getConnection()
    {
        if (empty(self::$connection)) {
            self::$connection = new PDO(DNS, USER, PASSWORD, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        }
        return self::$connection;
    }
}
