<?php
require_once(INCLUDE_PATH  . "mysqli.class.php");
class FileUpdate extends DatabaseConnection
{
    private static $tableName = "product2";
    public static function file_force_download($file)
    {
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="'.basename($file).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            exit;
        } 
    }
    public static function createProductWithoutAction(
        string $name,
        string $description,
        string $image,
        string $price
    ){
        $query = sprintf(
            "INSERT INTO `%s` (`name`, `description`, `image`, `price`, `actionId`) " .
                "VALUE ('%s', '%s', '%s', '%d', NULL)",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($description),
            self::getInstance()->connection()->real_escape_string($image),
            self::getInstance()->connection()->real_escape_string($price) );
            self::getInstance()->connection()->query($query);
    }
    public static function createProduct(
        string $name,
        string $description,
        string $image,
        string $price,
        string $actionId
    ){
        $query = sprintf(
        "INSERT INTO `%s` (`name`, `description`, `image`, `price`, `actionId`) " .
            "VALUE ('%s', '%s', '%s', '%d', '%d')",
        self::$tableName,
        self::getInstance()->connection()->real_escape_string($name),
        self::getInstance()->connection()->real_escape_string($description),
        self::getInstance()->connection()->real_escape_string($image),
        self::getInstance()->connection()->real_escape_string($price),
        self::getInstance()->connection()->real_escape_string($actionId) );
        self::getInstance()->connection()->query($query);
    }
    public static function deleteProducts()
    {
        $query = sprintf("DELETE FROM product2",
        );
        self::getInstance()->connection()->query($query);
    }

}