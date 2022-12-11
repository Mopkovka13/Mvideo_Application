<?php
function getFooter(): string
{
return
'<footer class="container-fluid">
    <div class="row">
        <div class="col">
            <a class="navbar-brand" href="#" style="margin: 10px">
                <img href="#" src="http://' . $_SERVER['SERVER_NAME'] . '/Mopkovka/static/img/logo2.svg" alt="" width="120" height="50">
            </a>
        </div>
        <div class="col-6"></div>
        <div class="col">
            <button type="button" class="btn btn-primary btn-lg mt-3" style="background-color: #474747">Карта магазина</button>
        </div>
    </div>

    <hr style="background-color: gray">
    
    <div class="row p-3">
        <div class="col" style="color: gray">
            <h5 style="color: white">Покупатели</h5>
            <div>Каталог</div>
            <div>Частые вопросы</div>
            <div>Акции и скидки</div>
            <div>M.Club – кэшбек и Бонусные рубли</div>
            <div>Доставка</div>
            <div>Обмен и возврат</div>
            <div>М.Сервис – ремонт, страховка</div>
            <div>Кредит и рассрочка</div>
            <div>Заберите товар через 15 минут после<br> заказа</div>
            <div>Гарантия лучшей цены</div>
            <div>Публичная оферта</div>
            <div>Безопасность в Интернете</div>
        </div>

        <div class="col ms-3" style="color: gray">
            <h5 style="color: white">Бизнесу</h5>
            <div>Техника для вашей компании</div>
            <div>Тендеры</div>
            <div>Поставщикам</div>
            <div>Арендуем помещения под магазины</div>
            <div>Электронный документооборот</div>
        </div>


        <div class="col ms-3" style="color: gray">
            <h5 style="color: white">О компании</h5>
            <div>Про М.Видео</div>
            <div>Пресс-центр</div>
            <div>Благотворительный фонд</div>
            <div>Экологические инициативы</div>
            <div>Партнёрская программа</div>
            <div>Инвесторам и акционерам</div>
            <div>Политика компании</div>
        </div>

        <div class="col" style="color: gray">
            <h5 style="color: white">Блог</h5>
            <div>Как сделать, чтобы вещи в шкафу<br> приятно пахли</div>
            <div>Новый iPhone 14: каким он будет и когда старт продаж</div>
            <div>Куда деть кабачки: 12 интересных рецептов</div>
            <div>Как установить «Сбербанк Онлайн» и приложения других банков на iPhone</div>
            <div>Осенняя обрезка плодовых деревьев: полезные советы</div>
            <div>7 способов избавиться от старой одежды</div>
            <div>Когда будет Черная пятница в 2022 году</div>
            <div>Тестируем iPhone 14 Pro Max: эволюция с элементами революции</div>
            <div>Как вкусно приготовить рис для гарнира, суши, ризотто и других блюд</div>
        </div>
        
        <div class="col ms-3" style="color: gray">
            <h5 style="color: white">Обратная связь</h5>
            <div>КОНТАКТЫ</div>
            <div>Канал Viber</div>
            <div>Telegram</div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
</script>
</body>

</html>';

}
