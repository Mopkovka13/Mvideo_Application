<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(CRUD_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');

ProductAction::changeProduct();
$actions = Product2::getAction();
$product = ProductAction::getProduct();

if($product[0] == null)
    $currentAction = Product2::getActionById(0);
else
    $currentAction = Product2::getActionById($product[0]);

var_dump($currentAction);
echo getHeader(UserLogic::current());
?>
<h2 class="text-center pt-3 ">Изменить товар</h2>
<form class=" needs-validation" novalidate action="change.php" method="post"  enctype="multipart/form-data">
    <div class="container pb-5">
        <input class="form-control" type="text" name="action" value="change" hidden>
        <input class="form-control" type="text" name="id" value="<?php echo $product[2];?>" hidden>
        <input class="form-control" type="text" name="old_img" value="<?php echo $product[3];?>" hidden>
        <div class="form-group">
            <small>Изображение</small>
            <input class="form-control" type="file" name="picture">
        </div>
        <div class="form-group">
            <small>Название</small>
            <input class="form-control" type="text" name="name" value="<?php echo $product[4];?>" required>
        </div>
        <div class="form-group" >
            <small>Акция</small>
            <!-- <input class="form-control" type="text" name="id_provider" value="<?php echo $product[0];?>" required> -->
            <select class="browser-default custom-select" name="actionId" required >
                <?php foreach ($actions as $op) : ?>
                    <option value="<?php echo $op[0]; ?>"><?php echo $op[1]; ?><?php echo $currentAction[1] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <small>Цена</small>
            <input class="form-control" type="number" name="price" value="<?php echo $product[5];?>" required>
        </div>
        <div class="form-group">
            <small>Описание</small>
            <input class="form-control" type="text" name="description" value="<?php echo $product[1];?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary m-2">Отправить</button>
        </div>

    </div>
</form>
<?php echo getFooter();
?>
<script>