<!DOCTYPE html>
<html>

<head>
	<?php require_once('config.php') ?>
	<?php require_once('./includes/public_functions.php') ?>
	<?php $posts = getPublishedPosts(); ?>
	<?php require_once('./includes/header.php') ?>
	<?php require_once('./includes/header.php') ?>
	<title>lifeblog</title>
</head>

<body>
	<div class="container">
		<?php include('./includes/navbar.php') ?>
		<?php include('./includes/banner.php') ?>
		<div class="content">
			<h2 class="content-title">Недавние записи
			</h2>
			<hr>
<?php foreach ($posts as $post): ?>
	<div class="post" style="margin-left: 0px;">
		<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
		<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
			<div class="post_info">
				<h3><?php echo $post['title'] ?></h3>
				<div class="info">
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
					<span class="read_more">Read more...</span>
				</div>
			</div>
		</a>
	</div>
<?php endforeach ?>
		</div>
		<?php include('./includes/footer.php') ?>
</body>

</html>