<?php
require_once(INCLUDE_PATH . "mysqli.class.php");
class ProductModel2 extends DatabaseConnection
{
    private static $tableName = "product2";
    private static $actionTable = "action";

    public static function create(
        string $image,
        string $name,
        string $description,
        int $price,
        int $actionId
        
        
    ) {

        $query = sprintf(
            "INSERT INTO `%s` (`image`, `name`, `description`, `price`, `actionId`) VALUE ('%s', '%s', '%s', '%d', '%d')",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($image),
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($description),
            self::getInstance()->connection()->real_escape_string($price),
            self::getInstance()->connection()->real_escape_string($actionId)
            
        );
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }
    public static function read()
    {
        $query = "SELECT product2.id, product2.image, product2.name, action.name as actionName, product2.description, product2.price 
                    FROM product2
                    LEFT JOIN action 
                    ON product2.actionId = action.id";
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }

    public static function update(
        int $id,
        string $img,
        string $name,
        string $description,
        int $price,
        int $actionId
    ) {
        $query = sprintf(
            "UPDATE `%s` SET `img` = '%s', `name` = '%s', `actionId` = %d, `price` = %d, `description` = '%s' 
            WHERE `id` = %d",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($img),
            self::getInstance()->connection()->real_escape_string($name),
            self::getInstance()->connection()->real_escape_string($actionId),
            self::getInstance()->connection()->real_escape_string($price),
            self::getInstance()->connection()->real_escape_string($description),
            self::getInstance()->connection()->real_escape_string($id)
        );
        
        echo "<br>" . $query;
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }

    public static function delete(int $id)
    {
        $query = sprintf(
            'DELETE FROM `%s` WHERE `id` = %d',
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($id)
        );
        self::getInstance()->connection()->query($query);
        if (!self::getInstance()->connection()->error) {
            printf("Errormessage: %s\n", self::getInstance()->connection()->error);
        }
    }
    public static function getAction()
    {
        $query = "SELECT * FROM action";
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }
    
    
    
    public static function getById(int $id)
    {
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `id` = %d",
            self::$tableName,
            self::getInstance()->connection()->real_escape_string($id)
        );
        $product = self::getInstance()->connection()->query($query);
        $product = $product->fetch_all();
        if (count($product) == 0) {
            return null;
        }
        return $product[0];
    }

    public static function getActionById(int $id){
        $query = sprintf(
            "SELECT * FROM `%s` WHERE `id` = %d",
            self::$actionTable,
            self::getInstance()->connection()->real_escape_string($id)
        );
        $product = self::getInstance()->connection()->query($query);
        $product = $product->fetch_all();
        if (count($product) == 0) {
            return null;
        }
        return $product[0];
    }

}