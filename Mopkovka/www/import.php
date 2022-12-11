<?php
    require_once(dirname(dirname(__FILE__)) . "/include/config.php");
    require_once(USER_APP_PATH . "index.php");
    require_once(STATIC_PATH . 'template/header.php');
    require_once(STATIC_PATH . 'template/footer.php');

    if(!UserLogic::isAuthorized()){
        header('Location: entr_page.php');
    }
    echo getHeader(UserLogic::current());
    
?>

<div class="d-flex justify-content-center">
    <form action="loadFile.php" enctype="multipart/form-data" method="POST">
   <p><input type="file" name="filename" multiple accept="json/*">
   <input type="submit" value="Отправить"></p>
  </form> 
</div>


<?php
    echo getFooter();
?>