<?php

namespace Source\Model;

define("DATABASE", [
    "host" => "localhost",
    "db_name" => "VagasOnline",
    "username" => "root",
    "password" => ""
]);

class conexao 
{
    private static $conn;

    public static function getInstance()
    {
        try {

            if(!isset(self::$conn)) {
                self::$conn = new \PDO("mysql: host=".DATABASE["host"].";dbname=".DATABASE["db_name"], DATABASE["username"], DATABASE["password"]);
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }

        } catch (\PDOException $error) {
            echo "ERROR: ".$error->getMessage();
        }

        return self::$conn;
    }


    public static function prepare($sql)
    {
        return self::getInstance()->prepare($sql);
    }

    public static function query($sql)
    {
        return self::getInstance()->query($sql);
    }

}