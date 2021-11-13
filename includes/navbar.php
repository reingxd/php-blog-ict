<div class="flex h-20 mb-4 shadow items-center">
	<div class="container">
		<div class="flex justify-between items-center">
			<div class="font-medium text-2xl">
				<a href="index.php">
					<h1>Авторский блог студии "ResinArt"</h1>
				</a>
			</div>
			<ul class="flex gap-5">
				<li>
					<a class="active" href="index.php">Главная</a>
				</li>
				<li>
					<a href="#news">Новости</a>
				</li>
				<li>
					<a href="#contact">Контакты</a>
				</li>
				<li>
					<a href="#about">О нас</a>
				</li>
				<?php if (isset($_SESSION['user']['role']) == "Admin") : ?>
					<li>
						<a class="text-blue-500" href="admin/index.php">Админка</a>
					</li>
				<?php endif ?>
				<?php if (isset($_SESSION['user']['username'])) : ?>
					<li>
						<a class="text-red-500" href="logout.php">Выход</a>
					</li>
				<?php endif ?>
			</ul>
		</div>
	</div>
</div>