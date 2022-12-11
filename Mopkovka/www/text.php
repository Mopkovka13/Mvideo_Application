<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(INCLUDE_PATH . "lab4.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
echo getHeader(UserLogic::current());
if (@$_POST["text"]) {
    $result = Lab4::allWork($_POST["text"]);
}

$arrContextOptions = array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);

if($_GET["preset"] == "1"){
    $_POST["text"] = file_get_contents('https://mishka-knizhka.ru/skazki-dlay-detey/zarubezhnye-skazochniki/skazki-alana-milna/vinni-puh-i-vse-vse-vse/#glava-pervaya-v-kotoroj-my-znakomimsya-s-vinni-puhom-i-neskolkimi-pchy', false, stream_context_create($arrContextOptions));
}

?>

<div class="container mb-2">
    <form class="" action="" method="post">
        <div class="form-group">
            <h3>Введите текст</h3>
            <textarea class="form-control" name="text" id="" cols="30" rows="10" required><?php echo trim(@$_POST["text"]); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<?php
if (@$_POST["text"]) : ?>
    <div>
        Задание 5:
        <?php //echo $result["task5"]; ?>
    </div>
    <div>
        Задание 8:
        <?php //echo $result["task8"]; ?>
    </div>
    <div>
        Задание 14:
        
        <?php //echo $result["task14"]; ?>
        <?php //echo $result["task4"]; ?>
    </div>
    <div>
        Задание 16:
        <?php //echo $result["task16"]; ?>
    </div>
    <div>
        Доп. задание:
        <?php echo $result["dopTask"]; ?>
    </div>
<?php
endif;
echo getFooter();
?>