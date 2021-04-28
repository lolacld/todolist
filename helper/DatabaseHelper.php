<?php
// connexion and security file
class DatabaseHelper
{

    private static $db_host = 'localhost';
    private static $db_name = 'mytotool';
    private static $db_user = 'root';
    private static $db_password = '';

    private static $DB;

    public static function getDB()
    {
        if (is_null(self::$DB)) {
            self::$DB = self::DBConnect();
        }

        return self::$DB;
    }

    private static function DBConnect()
    {
        return new PDO('mysql:host=' . self::$db_host . ';dbname=' . self::$db_name, self::$db_user, self::$db_password);
    }
}