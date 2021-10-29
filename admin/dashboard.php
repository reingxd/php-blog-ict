<?php include('../config.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/check_author_role.php'); ?>
<?php include(ROOT_PATH . '/admin/includes/dashboard_functions.php'); ?>
<?php include('./includes/admin_functions.php'); ?>
<?php include('./includes/head_section.php'); ?>

<?php
$users_num = getUsersNumber();
$posts_num = getPostsNumber();
$comments_num = getCommentsNumber();
?>
<title>Admin | Dashboard</title>
</head>

<body>
	<div class="header">
		<div class="logo">
			<a href="<?php echo './dashboard.php' ?>">
				<h1>Авторский блог студии "ResinArt"-Админ</h1>
			</a>
		</div>
		<?php if (isset($_SESSION['user'])) : ?>
			<div class="user-info">
				<span><?php echo $_SESSION['user']['username'] ?></span> &nbsp; &nbsp;
				<a href="<?php echo '../logout.php'; ?>" class="logout-btn">logout</a>
			</div>
		<?php endif ?>
	</div>
	<div class="container dashboard">
		<h1>Приветствую</h1>
		<div class="stats">
			<a <?php if ($_SESSION['user']['role'] == 'Admin') echo 'href="users.php"'; ?> class="first">
				<span><?php echo $users_num; ?></span> <br>
				<span>Новые пользователи</span>
			</a>
			<a href="posts.php">
				<span><?php echo $posts_num; ?></span> <br>
				<span>Новые посты</span>
			</a>
			<a>
				<span><?php echo $comments_num; ?></span> <br>
				<span>Новые коментарии</span>
			</a>
		</div>
		<br><br><br>
		<div class="buttons">
			<?php if ($_SESSION['user']['role'] == 'Admin') : ?>
				<a href="users.php">Добавить пользователей</a>
			<?php endif ?>
			<a href="posts.php">Добавить посты</a>
		</div>
	</div>
</body>

</html>