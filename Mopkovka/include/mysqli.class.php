<?php
require_once("config.php");
/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 *
 *   Подключение к Singleton + mysqli
 *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 */
class DatabaseConnection
{
    private static $instance = null; // отвечает за единственность экземпляра
    private $connection = null; // подключение

    protected function __construct()
    {
        $this->connection =  new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);//подключение к бд
        $this->connection->set_charset("utf8mb4");
        if ($this->connection->connect_errno)
        {
            die('Ошибка соединения: ' . $this->connection->connect_errno);
        }

    }
    protected function __clone()
    {

    }
    protected function __wakeup()
    {

    }
    public static function getInstance() : DatabaseConnection
    {
        if(!self::$instance) { // если не задано, то задаем, если задано, то тупо возвраащем
            self::$instance = new self();
        }
        return self::$instance;
    }
    public static function connection() : mysqli
    {
        // return $this->connection;
        return self::getInstance()->connection;
    }
    public static function getLastId()
    {
        /**
         * Получает id последней добавленной в бд записи
         */
        return  self::getInstance()->connection()->insert_id;
    }

}

