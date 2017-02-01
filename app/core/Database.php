<?php

class Database
{
    private static $instance = null;

    private static $db_host = "localhost";

    private static $db_name = "devcenter";

    private static $db_user = "root";

    private static $db_pass = "";

    private function __construct() {}

    private function __clone() {}

    public static function getInstance() {
        if(!isset(self::$instance)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host='.self::$db_host.';dbname='.self::$db_name.';charset=utf8',
                self::$db_user, self::$db_pass, $pdo_options);
        }
        return self::$instance;
    }
}