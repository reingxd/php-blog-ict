<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/header.php'); ?>
<?php
if (isset($_GET['topic'])) {
	$topic_id = $_GET['topic'];
	$posts = getPublishedPostsByTopic($topic_id);
}
?>
<title>Авторский блог студии "ResinArt"</title>
</head>

<body>
	<?php include(ROOT_PATH . '/includes/navbar.php'); ?>
	<div class="container">
		<h2 class="text-2xl font-normal mb-2">
			Посты по теме <u><?php echo getTopicNameById($topic_id); ?></u>
		</h2>
		<hr class="my-2">
		<div class="flex flex-wrap gap-2 items-start">
			<?php foreach ($posts as $post) : ?>
				<div class="flex flex-col flex-none break-inside bg-white overflow-hidden border-gray-200 shadow-sm p-3 hover:shadow-md duration-75">
					<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="max-h-64 max-w-64 h-64 w-64 rounded mb-1" alt="">
					<a class="hover:underline text-lg font-medium" href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
						<?php echo $post['title'] ?>
					</a>
					<span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	</div>
	<?php include(ROOT_PATH . '/includes/footer.php'); ?>