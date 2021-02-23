<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Добро пожаловать <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">Выход</a></span>
	</div>
<?php } else { ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>Сегодняшнее вдохновление</h1>
			<p>
				Одним днем твоя жизнь <br>
				пробежит мимо твоих глаз. <br>
				Убедись что оно стоило того. <br>
				<span>~ Геральд Вэй</span>
			</p>
			<a href="register.php" class="btn">Присоедняйтесь!</a>
		</div>

		<div class="login_div">
			<form action="<?php echo BASE_URL . 'index.php'; ?>" method="post">
				<h2>Войти</h2>
				<div style="width: 60%; margin: 0px auto;">
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
				</div>
				<input type="text" name="username" value="<?php echo $username; ?>" placeholder="Логин">
				<input type="password" name="password" placeholder="Пароль">
				<button class="btn" type="submit" name="login_btn">Вход</button>
			</form>
		</div>
	</div>
<?php } ?>