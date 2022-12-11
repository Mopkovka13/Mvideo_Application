<?php
    require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "include". DIRECTORY_SEPARATOR ."config.php");
    require_once(USER_APP_PATH . "index.php");
    require_once(INCLUDE_PATH . "file.php");
    require_once(PRODUCT_APP_PATH . "index.php");

    if(!UserLogic::isAuthorized()){
        header('Location: entr_page.php');
    }

    $filename = INCLUDE_PATH . 'results.json';
    $products = Product::getProducts();
    $fp = fopen($filename, 'w');
    fwrite($fp, json_encode($products, JSON_UNESCAPED_UNICODE));
    fclose($fp);
    FileUpdate::file_force_download($filename);
?>