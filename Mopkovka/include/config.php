<?php
/**
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 * 
 *  Данный файл хранит все константы/настрйоки, чтобы не лазить по файлам и не искать нужное
 * 
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 */
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define("DB_HOST", "localhost");//хост
define("DB_USER", "root");//имя пользователя
define("DB_PASSWORD", "");//паролья
define("DB_NAME", "mvideodb");//база данных название
define("ROOT_PATH", $_SERVER['SERVER_NAME'] . "/Mopkovka/");
define('__ROOT__', dirname(dirname(__FILE__))); 
define('STATIC_PATH', __ROOT__ . DIRECTORY_SEPARATOR . 'static'. DIRECTORY_SEPARATOR);
define('MEDIA_PATH', __ROOT__ . DIRECTORY_SEPARATOR . 'media'. DIRECTORY_SEPARATOR . 'product' . DIRECTORY_SEPARATOR);
define('INCLUDE_PATH', __ROOT__ . DIRECTORY_SEPARATOR . 'include' . DIRECTORY_SEPARATOR);
define("USER_APP_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR .
        'include'.DIRECTORY_SEPARATOR.'user_app' .DIRECTORY_SEPARATOR);
define("CRUD_APP_PATH", dirname(dirname(__FILE__)) . '/include/crud_app/');
define("PRODUCT_APP_PATH", dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR .
        'include'.DIRECTORY_SEPARATOR.'product_app' .DIRECTORY_SEPARATOR);

session_start();