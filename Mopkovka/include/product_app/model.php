<?php
require_once(INCLUDE_PATH  . "mysqli.class.php");
class ProductModel extends DatabaseConnection
{
    public static function getAll()
    {
        $query = "SELECT product.image, product.name, action.name as actionName, product.description, product.price 
                    FROM product
                    LEFT JOIN action 
                    ON product.actionId = action.id";
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }
    public static function getProducts()
    {
        $query = "SELECT * FROM product";
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }
    public static function getFiltered(array $filterField)
    {
        $query = "SELECT product.image, product.name, action.name as actionName, product.description, product.price 
                    FROM product
                    LEFT JOIN action 
                    ON product.actionId = action.id";

        $continue = false;
        if (!empty($filterField["costFrom"])) {
            $query .= " WHERE product.price >= " . $filterField["costFrom"];
            $continue = true;
        }

        if (!empty($filterField["costTo"])){
            if($continue){
                $query .= " AND product.price <= " . $filterField["costTo"];
            }
            else{
                $continue = true;
                $query .= " WHERE product.price <= " . $filterField["costTo"];
            }
        }

        if(!empty($filterField["action"])){
            if($continue){
                $query .= " AND product.actionId = " . $filterField["action"];
            }
            else{
                $continue = true;
                $query .= " WHERE product.actionId = " . $filterField["action"];
            }
        }

        if(!empty($filterField["name"])){
            if($continue){
                $query .= " AND product.name LIKE '%" . $filterField["name"] . "%'";
            }
            else{
                $query .= " WHERE product.name LIKE '%" . $filterField["name"] . "%'";
            }
        }
        $result = self::getInstance()->connection()->query($query);
            return $result->fetch_all();

    }
    public static function getAction()
    {
        $query = "SELECT * FROM action";
        $result = self::getInstance()->connection()->query($query);
        return $result->fetch_all();
    }
}
