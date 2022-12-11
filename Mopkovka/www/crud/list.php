<?php
    require_once(dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR . "include". DIRECTORY_SEPARATOR ."config.php");
    require_once(USER_APP_PATH . "index.php");
    require_once(CRUD_APP_PATH . "index.php");
    require_once(STATIC_PATH . 'template/header.php');
    require_once(STATIC_PATH . 'template/footer.php');

$products = Product2::Get();
$error = ProductAction::deleteProduct();

echo getHeader(UserLogic::current());
?>
<div class="container">
    <div class="row">
        <div class="col-3">
            <h3 class="m-2">Список товаров</h3>
        </div>
        <div class="col-7"></div>
        <div class="col mt-3">
            <div>
                <a href="add.php"> Добавить товар</a>
            </div>
        </div>
    </div>
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">image</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">cost</th>
                <th scope="col">action</th>
                <th scope="col">up</th>
                <th scope="col">del</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product) : ?>
                <tr>
                    <th scope="row"><?php echo $product[0] ?></th>
                    <td><img src="http://<?php echo $_SERVER['SERVER_NAME'] ?>//Mopkovka/media/product/<?php echo $product[1] ?>" style='width: 80px'></td>
                    <td><?php echo $product[2] ?></td>
                    <td><?php echo $product[4] ?></td>
                    <td><?php echo $product[5] ?></td>
                    <td><?php echo $product[3] ?></td>
                    <td>
                        <form action="change.php" method="POST">
                            <input type="text" name="action" value="get" hidden>
                            <input type="number" name="id" value="<?php echo $product[0] ?>" hidden>
                            <button class="btn btn-primary" type="submit">Изменить</button>
                        </form>
                    </td>
                    <td>
                        <form action="list.php" method="POST">
                            <input type="text" name="action" value="delete" hidden>
                            <input type="text" name="id" value="<?php echo $product[0] ?>" hidden>
                            <button class="btn btn-danger" type="submit">X</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php echo getFooter();
?>