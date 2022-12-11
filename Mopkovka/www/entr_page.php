<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');

$errors = UserAction::signIn();
echo getHeader(UserLogic::current());
?>
<h2 class="text-center pt-3 ">Авторизация</h2>
<div class="container pb-5">
	<div class="row">
		<div class="col-sm">
		</div>
		<div class=" col-6 p-2">
			<form action="entr_page.php" method="post">
			<input type="text" name="action" value="signin" hidden>
				<div class="form-group">
					<label for="exampleInputEmail1">Логин</label>
					<input type="text" class="form-control" name="login" placeholder="login">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" class="form-control" name="password" placeholder="password">
				</div>
                <div class="form-check">
					<input type="checkbox" class="form-check-input" name="check">
					<label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
				</div>
				<button type="submit" class="btn btn-primary m-2">Авторизация</button>
				
			</form>
			<a href="register_page.php"><span>Нет аккаунта? жми сюда!</span></a>
		</div>
		<div class="col-sm">
		</div>
	</div>
</div>
<?php if ($errors) : ?>
		<p class="alert-info"><?php echo $errors; ?></p>
<?php endif; ?>
<?php

echo getFooter();

?>