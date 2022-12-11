<?php
class ProductAction
{
    /**
     * @return array|string
     */
    public static function addProduct()
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "add") {
            return "";
        }

        $error = Product2::addProduct($_FILES['picture'], $_POST["name"], $_POST["description"], $_POST["price"], (int)$_POST["actionId"]);
        if (!count($error)) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "//Mopkovka/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
    public static function deleteProduct(): string
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "delete") {
            return "";
        }
        $error = Product2::deleteElement($_POST["id"]);
        if (!$error) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "//Mopkovka/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
    public static function getProduct()
    {
        /**
         * Получает товар по id через POST
         */
        if ($_POST["action"] != "get") {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "//Mopkovka/www/crud/list.php?success=1");
            die();
        }
        $result = Product2::getProduct($_POST["id"]);
        return $result;
    }

    public static function changeProduct()
    {
        if (empty($_POST)) {
            return "";
        }
        if ($_POST["action"] != "change") {
            return "";
        }
        $error = Product2::addProduct($_FILES['picture'], $_POST["name"], $_POST["description"], $_POST["price"], (int)$_POST["actionId"]);
        Product2::deleteElement($_POST["id"]);

        //var_dump($_POST);
        //$error = Product2::changeProduct($_POST["id"], $_POST["old_img"], $_POST["name"], $_POST["description"], $_POST["price"], $_FILES['picture'], $_POST["actionId"]);
        if (!$error) {
            header("Location: http://" . $_SERVER['SERVER_NAME'] . "//Mopkovka/www/crud/list.php?success=1");
            die();
        }
        return $error;
    }
}
