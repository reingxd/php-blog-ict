<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>Добро пожаловать <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">Выход</a></span>
	</div>
<?php } else { ?>
	<div class="bg-cover bg-center h-auto text-white py-24 px-10 object-fill" style="background-image: url('https://images.unsplash.com/photo-1617638924751-cc232f82ecf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHJlc2lufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60')">
		<div class="md:w-1/2">
			<p class="text-3xl font-bold">Сегодняшнее вдохновление</p>
			<p class="text-2xl mt-5 mb-10 leading-tight font-light">
				Одним днем твоя жизнь <br>
				пробежит мимо твоих глаз. <br>
				Убедись что оно стоило того. <br>
				<span>~ Геральд Вэй</span>
			</p>
			<a href="login.php" class="bg-blue-400 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-blue-500 transition-colors duration-100">Войти</a>
			<a href="register.php" class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-purple-900 transition-colors duration-100">Присоедниниться</a>
		</div>
	</div>
<?php } ?>