<?php
require_once(dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "include". DIRECTORY_SEPARATOR ."config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . "template". DIRECTORY_SEPARATOR ."header.php");
require_once(STATIC_PATH . "template". DIRECTORY_SEPARATOR ."footer.php");
require_once(PRODUCT_APP_PATH . "index.php");

if(!UserLogic::isAuthorized()){
    header('Location: entr_page.php');
}

$costFrom = @htmlspecialchars($_GET["costFrom"]);
$costTo = @htmlspecialchars($_GET["costTo"]);
$name = @htmlspecialchars($_GET["name"]);
$currentAction = @htmlspecialchars($_GET["action"]);
$filter = htmlspecialchars($_GET['filter']);

$products = Product::getFilter();
$action = Product::getAction();

echo getHeader(UserLogic::current());
?>
<main class="main">
    <hr>
    <div class="h2 text-center">
        Фильтрация
    </div>
    <div class="text-main w-100 mt-5">
        <div class="container-fluid">
            <div class="mt-5">
                <form action="" class="text-center" method="get">

                    <div class="mb-3">
                        <div class="mb-3">
                            По цене:
                        </div>
                        <input type="number" name="costFrom" value="<?php if($filter) echo $costFrom;?>" placeholder="Цена от" class="form-control mb-3">
                        <input type="number" name="costTo" value="<?php if($filter) echo $costTo;?>" placeholder="Цена до" class="form-control">
                    </div>

                    <div class="mb-3">
                        <div class="mb-3">
                            Фильтрация по акции:
                        </div>
                        <select name="action" class="form-control">
                            <option value="" default>Не выбрано</option>
                            <?php foreach ($action as $op) : ?>
                                <option value="<?php echo $op[0]; ?>"><?php echo $op[1]; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>



                    <div class="mb-3">
                        <div class="mb-3">
                            По названию:
                        </div>
                        <input type="text" name="name" placeholder="Введите название продукта" class="form-control" value="<?php if($filter) echo $name;?>">
                    </div>

                    <input type="submit" value="Применить фильтр" name="filter" class="btn btn-primary">
                    <input type="submit" value="Очистить фильтр" name="clearFilter" class="btn btn-secondary">
                </form>
                <table class="table mt-5">
                    <thead>
                    <tr>
                        <th scope="col">Картинка</th>
                        <th scope="col">Название</th>
                        <th scope="col">Описание</th>
                        <th scope="col">Стоимость</th>
                        <th scope="col">Акция</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $product) {?>
                            <tr>
                                <td scope="col">
                                    <img src="http://<?php echo ROOT_PATH ?>/media/product/<?php echo $product[0]?>.webp" height="" width="200px" alt="">
                                </td>
                                <td scope="col">
                                    <?= $product[1]?>
                                </td>
                                <td scope="col">
                                    <?= $product[3]?>
                                </td>
                                <td scope="col">
                                    <?= $product[4]?>
                                </td>
                                <td scope="col">
                                    <?= $product[2]?>
                                </td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<?php
echo getFooter();
?>
