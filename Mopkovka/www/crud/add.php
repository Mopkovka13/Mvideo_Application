<?php
require_once(dirname(dirname(dirname(__FILE__))) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(CRUD_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');

$errors = ProductAction::addProduct();
$action = Product2::getAction();
echo getHeader(UserLogic::current());
?>
<h2 class="text-center pt-2 ">Добавить товар</h2>
<form class=" needs-validation" validate action="add.php" method="post" enctype="multipart/form-data">
    <div class="container pb-3">
        <input class="form-control" type="text" name="action" value="add" hidden>
        <div class="form-group">
            <small>Изображение</small>
            <input class="form-control" type="file" name="picture" required>
        </div>
        <div class="form-group">
            <small>Название</small>
            <input class="form-control" type="text" name="name" required>
        </div>
        <div class="form-group">
            <small>Описание</small>
            <input class="form-control" type="text" name="description">
        </div>
        <div class="form-group">
            <small>Акция</small>
            <select class="browser-default custom-select" name="actionId" required>
                <?php foreach ($action as $op) : ?>
                    <option value="<?php echo $op[0]; ?>"><?php echo $op[1]; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <small>Цена</small>
            <input class="form-control" type="number" name="price" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary m-2">Отправить</button>
        </div>

    </div>
</form>

<?php echo getFooter();
?>
<script>