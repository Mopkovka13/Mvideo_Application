<?php
require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "include". DIRECTORY_SEPARATOR ."config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . "template". DIRECTORY_SEPARATOR ."header.php");
require_once(STATIC_PATH . "template". DIRECTORY_SEPARATOR ."footer.php");

echo getHeader(UserLogic::current());
?>
<main class="container-fluid">
    <div class="ml-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color: unset">
                <li class="breadcrumb-item active" aria-current="page">Главная</li>
                <li class="breadcrumb-item active" aria-current="page">Компьютерная техника</li>
                <li class="breadcrumb-item active" aria-current="page">Моноблоки</li>
                <li class="breadcrumb-item active" aria-current="page">Apple IMac</li>
                <li class="breadcrumb-item active" aria-current="page">Apple</li>
            </ol>
        </nav>
    </div>
    <div class="row ml-5">
        <div class="col-sm-0">
            <a class="navbar-brand" href="#">
                <img src="http://localhost/Mopkovka/static/img/30051828b.webp" alt="" width="70" height="60">
            </a>
        </div>
        <div class="col-sm-4 mt-4">
            <a class="navlink"><p class="fs-6 text-start   " >Моноблок Apple iMac 27 i7 3,8/128/4T SSD/RP5500XT (Z0ZX)</p></a>
        </div>
        <div class="col-sm-5 mt-3">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#">О товаре</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Характеристики</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Отзывы</a>
                </li>
            </ul>
        </div>
        <div>
            <a href="#m" class="btn btn-outline-danger mt-3" tabindex="-1" role="button" >Посмотреть аналоги</a>
        </div>
    </div>
    <hr>
    <div class="row mx-5">
        <div class="row">
            <div class="col-7">
                <div class="row">
                    <b class="fs-2 text-start" style="margin: 13px">Отзывы</b>
                </div>
                <div class="row">
                    <div class="col-8">
                        <p class="fs-6 text-start">Тимофей&nbsp;&nbsp;&nbsp;20 сентября 2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Мощность
                    </div>
                    <div class="col-2">
                        Функциональность
                    </div>
                    <div class="col-2">
                        Дизайн
                    </div>
                </div>
                <div class="row bd-danger">
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Плюсы</b>
                </div>
                <div>
                    Моноблок буквально летает. Для моих сложных задач компьютеру мощностей хватает, я доволен!
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Минусы</b>
                </div>
                <div>
                    Мотолько плюсы
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Отзыв</b>
                </div>
                <div>
                    Непосредственно экран мне кажется гигантским, и я делаю минимальную яркость, поскольку слишком много
                    сочной картинки. Качество изображения очень хорошее, мы его можем оценить, судя по фото экрана.
                    Кстати,
                    компьютер оснащен функцией Турбомоторам Уст, которая увеличивает тактовую частоту процессора до 4,1
                    ГГЦ.
                    По факту тактовая частота 3 ГГЦ. Процессор core i5. Я неделю как счастливый владелец нового
                    компьютера.
                    Я сразу оценил удобство системы для пользователя. При первом включении мне компьютер предложил
                    перенос
                    данных с предыдущей машины. Я не вижу на фото зернистости, которая присуща фотографиям экранов с
                    другими
                    дисплеями. Но люди в отзывах пишут, что долго выполняются сложные задачи редактирования видео и
                    фото.
                    Лично я с этим спорить не могу, я пользователь, которому надо видео записать, аудио. Делать
                    документы,
                    вести группу в ВК. Ну и кино посмотреть! Я включил ассистент миграции на старом ноутбуке и данные в
                    течении 30 минут были полностью перенесены. Перенеслись даже закладки браузера и все пароли.
                </div>
                <br>
                <div class="row" style="margin: 7px">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-0">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>

                            <div class="col-0">
                                2
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="col-0">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>
                            <div class="col-0">
                                1
                            </div>
                            <div class="col-0">
                                <a href="#" class="text-primary ml-3">Комментировать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="col-s">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-8">
                        <p class="fs-6 text-start   ">Лариса &nbsp;&nbsp;&nbsp;23 сентября 2021</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-2">
                        Мощность
                    </div>
                    <div class="col-2">
                        Функциональность
                    </div>
                    <div class="col-2">
                        Дизайн
                    </div>
                </div>
                <div class="row bd-danger">
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                    <div class="col-2">
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                        <i class="fas fa-star" style="color: red;"></i>
                    </div>
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Плюсы</b>
                </div>
                <div>
                    Красивый, большой экран с хорошей цветопередачей.
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Минусы</b>
                </div>
                <div>
                    Работает нормально, поэтому минусов нет.
                </div>
                <div class="row">
                    <b class="fs-3 text-start   " style="margin: 13px">Отзыв</b>
                </div>
                <div>
                    Приличный моноблок серебристого цвета с большим экраном для работы. Тут современный дисплей Retina
                    5K,
                    поэтому и разрешение у экрана 5120x2880 пикселей. Встроенная акустическая система тоже работает
                    хорошо,
                    звук выходит чистый без какого-либо изображения даже на сильной громкости. Оперативная память 128
                    ГБ,
                    поэтому всё работает быстро. Частота памяти составляет 2666 МГц. У жесткого диска хороший объём в 4
                    ТБ,
                    поэтому он ещё очень долго не будет заполнен до конца. Есть блютус, но я включаю его не часто. Есть
                    всякие разъёмы для специальных проводов. Сразу в комплекте были мышь и клавиатура.
                </div>
                <div class="row" style="margin: 7px">
                    <div class="col-11">
                        <div class="row">
                            <div class="col-0">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>

                            <div class="col-0">
                                1
                            </div>
                            &nbsp;&nbsp;&nbsp;
                            <div class="col-0">
                                <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                            </div>
                            <div class="col-0">
                                1
                            </div>

                            <div class="col-0">
                                <a href="#" class="text-primary ml-3">Комментировать</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="col-s">
                            <i class="fa fa-telegram" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-sm-1"></div>
            <div class="col-2 mt-5">
                <div class="row mb-2">
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    <i class="fas fa-star" style="color: red;"></i>
                    &nbsp;&nbsp;&nbsp;5.0
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-8 redline"></div>
                    <div class="col-4">Дизайн</div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-8 redline"></div>
                    <div class="col-4">Мощность</div>
                </div>
                <div class="row d-flex align-items-center">
                    <div class="col-8 redline"></div>
                    <div class="col-4">Функциональность</div>
                </div>
                <div class="row mt-3">
                    <button type="button" class="btn btn-primary btn-lg" style="background-color: red;">Оставить отзыв
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <br>
            Вы можете купить Моноблок Apple iMac 27 i7 3,8/128/4T SSD/RP5500XT (Z0ZX) в магазинах М.Видео по доступной
            цене.
            Моноблок Apple iMac 27 i7 3,8/128/4T SSD/RP5500XT (Z0ZX): отзывы покупателей, владельцев.
            <br>
            <br>
            <a href="#" class="text-primary">Смотреть все Apple iMac Apple</a>
        </div>
    </div>
</main>






<?php
echo getFooter();
?>
