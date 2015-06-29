<?php

class Database
{
    //	object properties
    private static $dbName = 'Books';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbUserPassword = 'root';
    private static $dbConnect = null;

    //	object methods
    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // one connection through whole application
        if(null == self::$dbConnect)
        {
            try
            {
                self::$dbConnect =  new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
                self::$dbConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }

        return self::$dbConnect;
    }

    public static function disconnect()
    {
        self::$dbConnect = null;
    }

}
