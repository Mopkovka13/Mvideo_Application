<?php
require_once(dirname(dirname(__FILE__)) . "/include/config.php");
require_once(USER_APP_PATH . "index.php");
require_once(STATIC_PATH . 'template/header.php');
require_once(STATIC_PATH . 'template/footer.php');
$errors = UserAction::signUp();
// if ($_GET) {
// 	$errors = explode("!", strip_tags($_GET["error"]));
// }
echo getHeader(UserLogic::current());
?>
<h2 class="text-center pt-3 ">Регистрация</h2>
<?php if ($errors) : ?>
	<?php foreach ($errors as $er) : ?>
		<p class="alert-info"><?php echo $er; ?></p>
	<?php endforeach; ?>
<?php endif; ?>
<div class="container pb-5">
	<div class="row">
		<div class="col-sm">
		</div>
		<div class="bg-light col-6 p-2">
			<form class=" needs-validation" novalidate action="register_page.php" method="post">
				<input type="text" name="action" value="signup" hidden>
				<div class="form-group">
					<label for="exampleInputEmail1">Логин</label>
					<input type="text" class="form-control" name="login" value="<?php echo @$_POST["login"]; ?>" placeholder="Логин(почта)" required>
					<div class="invalid-feedback">
						Введите правильный логин!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputName">ФИО</label>
					<input type="text" class="form-control" name="name" value="<?php echo @$_POST["name"]; ?>" placeholder="Иванов Иван Иванович" required>
					<div class="invalid-feedback">
						Введите полное ФИО

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputGender">Пол</label>
					<input type="text" class="form-control" name="gender" value="<?php echo @$_POST["gender"]; ?>" placeholder="м/ж" required>
					<div class="invalid-feedback">
						Введите правильный пол м или ж!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputBirthday">Дата Рождения</label>
					<input type="date" class="form-control" name="birthday" value="<?php echo @$_POST["birthday"]; ?>" placeholder="01/01/2000" required>
					<div class="invalid-feedback">
						Введите дату рождения!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputBlood">Группа крови</label>
					<input type="number" class="form-control" name="blood" value="<?php echo @$_POST["blood"]; ?>" placeholder="Группа крови" required min="1" max="4">
					<div class="invalid-feedback">
						Введите группу крови (1-4)!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputFactor">Резус-фактор</label>
					<input type="number" class="form-control" name="factor" value="<?php echo @$_POST["factor"]; ?>" placeholder="Резус-фактор" required min="0" max="1">
					<div class="invalid-feedback">
						Введите резус-фактор!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputVk">Ссылка на страницу вконтакте</label>
					<input type="text" class="form-control" name="vk" value="<?php echo @$_POST["vk"]; ?>" placeholder="https://vk.com" required>
					<div class="invalid-feedback">
						Введите правильную ссылку!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputInteres">Инетересы</label>
					<input type="text" class="form-control" id="interes" name="interes" value="<?php echo @$_POST["interes"]; ?>" placeholder="Введите текст" required>
					<div class="invalid-feedback">
						Введите интересы!

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Пароль</label>
					<input type="password" class="form-control password" id="password1" name="password1" value="<?php echo @$_POST["password1"]; ?>" placeholder="password" required onchange="passVaidate('password1')">
					<div class="invalid-feedback">
						Пароль должен содержать не менее 6 символов и верхнего и нижнего регистра, цифры и спец. символа

					</div>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Повторите пароль</label>
					<input type="password" class="form-control password" id="password2" name="password2" value="<?php echo @$_POST["password2"]; ?>" placeholder="password" required onchange="passVaidate('password2')">
					<div class="invalid-feedback">
						Пароли не совпадают!

					</div>
				</div>
				<button type="submit" class="btn btn-primary m-2">Регистрация</button>
			</form>
			<a href="entr_page.php"><span>Страница авторизации!</span></a>
		</div>
		<div class="col-sm">
		</div>
	</div>
</div>
<?php echo getFooter();?>
<script>
	(function() {
		'use strict'

		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.querySelectorAll('.needs-validation')

		// Loop over them and prevent submission
		Array.prototype.slice.call(forms)
			.forEach(function(form) {
				form.addEventListener('submit', function(event) {
					if (!form.checkValidity()) {
						event.preventDefault()
						event.stopPropagation()
					}

					form.classList.add('was-validated')
				}, false)
			})
	})()
</script>