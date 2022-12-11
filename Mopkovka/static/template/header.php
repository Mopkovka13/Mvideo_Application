<?php
function getHeader($auth = null): string
{

if ($auth == null) {
    $authMessage = 'Вы не авторизованы! ';
    $authText = '<a href="http://' . ROOT_PATH . 'www/entr_page.php" class="dec">Войти</a></button>';
    $textLab4 = '';
}else {
    $authMessage = 'Вы вошли как: ' . $auth . '';
    $authText = '<a href="http://' . ROOT_PATH . 'www/exit.php" class="dec">Выйти</a></button>';
    $textLab4 = 'Проверить текст';
}
return
'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Моноблок Apple iMac 27 i7 3,8/128/4T SSD/RP5500XT (Z0ZX)</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="http://' . $_SERVER['SERVER_NAME'] . '/Mopkovka/static/css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/54fc53b5b1.js" crossorigin="anonymous"></script>
    <style>
        .redline {
            border-top: 5px;
            border-color: red;
            width: 130px;
            height: 7px;
            background-color: red;
        }
    </style>
</head>

<body>
<header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-lg-0">
            <div class="container-fluid">
                <span class="navbar-text">
                    <a href="#">Самара</a>
                    <a href="#">Магазины</a>
                    <a href="#">Доставка</a>
                </span>

                <span class="navbar-text">
                    '. $authMessage .'
                    &nbsp&nbsp&nbsp&nbsp
                    '. $authText .'
                </span>
            </div>
        </nav>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-brand col-auto" href="http://localhost/Mopkovka/" style="margin: 10px">
        <a href=http://localhost/Mopkovka/>
            <img src="http://' . $_SERVER['SERVER_NAME'] . '/Mopkovka/static/img/logo_red_web_fl1.svg" alt="" width="120" height="50">
        </a>
            
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-primary btn-lg" style="background-color: red">Каталог</button>
        </div>
        
        <div class="col input-group mt-1">
            <input type="text" class="form-control" placeholder="Поиск">
            <form action="http://localhost/Mopkovka/www/product_list.php">
                <button class="btn btn-outline-dark shadow-none" type="submit">
                    Поиск
                </button>
            </form>
            
        </div>
        <!--
            <div class="container-fluid col">
                <form action="http://localhost/Mopkovka/www/product_list.php" class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                    <button class="btn btn-outline-success" type="submit ">Поиск</button>
                </form>
            </div>
        -->
        
        <div class="navbar-brand col-auto"><a href="http://' . ROOT_PATH . 'www/text.php">'.$textLab4.'</a></div>
        <div class="navbar-brand col-auto"><a href="http://' . ROOT_PATH . 'www/crud/list.php"">CRUD</a></div>
        <div class="navbar-brand col-auto"><a href="http://' . ROOT_PATH . 'www/import.php">Импорт</a></div>
        <div class="navbar-brand col-auto"><a href="http://' . ROOT_PATH . 'www/export.php">Экспорт</a></div>
    </nav>
    <div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">ВСЕ АКЦИИ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">СКИДКИ И РАССРОЧКА <<0-0-24>></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ТЕЛЕВИЗОРЫ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">IPHONE 14 и 14 PRO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ЭКСПРЕСС-ДОСТАВКА</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ГАРАНТИЯ ЛУЧШЕЙ ЦЕНЫ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">ЛУЧШИЕ ПРЕДЛОЖЕНИЯ</a>
            </li>
        </ul>
    </div>
    <hr>
</header>';
}
