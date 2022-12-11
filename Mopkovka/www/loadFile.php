<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(INCLUDE_PATH . "file.php");

if(move_uploaded_file($_FILES['filename']['tmp_name'], INCLUDE_PATH.$_FILES['filename']['name'])){
    $ourData = file_get_contents(INCLUDE_PATH.$_FILES['filename']['name']);
    $array = json_decode($ourData, true);
    FileUpdate::deleteProducts();
    foreach($array as $item)
    {
        $name = $item[1];
        $description = $item[2];
        $image = $item[5]  . ".webp";
        $price = $item[3];
        $actionId = $item[4];
        if(is_numeric($actionId))
        {
            FileUpdate::createProduct($name, $description, $image, $price, $actionId);
        }
        else
        {
            FileUpdate::createProductWithoutAction($name, $description, $image, $price);
        }
    }
}
echo "Успешно загружен";
//header('Location: mvideo.php');