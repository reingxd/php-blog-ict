<?php  include('../config.php'); ?>
	<?php include('./includes/admin_functions.php'); ?>
	<?php include('./includes/head_section.php'); ?>
	<title>Admin | Dashboard</title>
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo'./dashboard.php' ?>">
				<h1>Авторский блог студии "ResinArt"-Админ</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])): ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp; 
				<a href="<?php echo'../logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Приветствую</h1>
		<div class="stats">
			<a href="users.php" class="first">
				<span>43</span> <br>
				<span>Новые пользователи</span>
			</a>
			<a href="posts.php">
				<span>43</span> <br>
				<span>Новые посты</span>
			</a>
			<a>
				<span>43</span> <br>
				<span>Новые коментарии</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<a href="users.php">Добавить пользователей</a>
			<a href="posts.php">Добавить посты</a>
		</div>
	</div>
</body>
</html>