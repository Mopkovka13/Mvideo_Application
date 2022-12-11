<?php
class Product
{
    public static function getAction():array
    {
        return ProductModel::getAction();
    }

    public static function getProducts():array{
        return ProductModel::getProducts();
    }

    public static function getFilter() :array
    {
        if(empty($_GET))
        {
            return ProductModel::getAll();
        }
        $arrayField = array(
            "costFrom" => null,
            "costTo" => null,
            "name" => null,
            "action" => null
        );
        if ($_GET["costFrom"]) {
            $arrayField["costFrom"] = htmlspecialchars($_GET["costFrom"]);
        }
        if ($_GET["costTo"]) {
            $arrayField["costTo"] = htmlspecialchars($_GET["costTo"]);
        }
        if ($_GET["name"]) {
            $arrayField["name"] = htmlspecialchars($_GET["name"]);
        }
        if ($_GET["action"]) {
            $arrayField["action"] = htmlspecialchars($_GET["action"]);
        }
        return  ProductModel::getFiltered($arrayField);
    }
}