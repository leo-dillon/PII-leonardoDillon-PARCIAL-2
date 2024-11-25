<?php
class Conexion
{
    private const DB_SERVER = "localhost";
    private const DB_USER = "root";
    private const DB_PASS = "";
    private const DB_NAME = "pii_leodillon";
    private const DB_CHARSET = "utf8mb4";

    private const DB_DSN = "mysql:host=" . self::DB_SERVER . ";dbname=" . self::DB_NAME . ";charset=" . self::DB_CHARSET;
    
    private static ?PDO $db = null;
    
    // private PDO $db;

    // public function __construct()
    public static function conectar()
    {
        try
        {
            // $this->$db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS );
            self::$db = new PDO(self::DB_DSN, self::DB_USER, self::DB_PASS );
        } catch (Exception $e)
        {
            die('Error al conectar con MySQL.');
        }
    }

    // public function getConexion():PDO
    // {
    //     return $this->$db;

    // }
    public static function getConexion():PDO
    {
        if(self::$db === null) {
            self::conectar();
        }
        return self::$db;
    }

}
?>