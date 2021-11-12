<?php require_once('config.php') ?>
<?php require_once('./includes/public_functions.php') ?>
<?php require_once(ROOT_PATH . '/includes/registration_login.php') ?>
<?php $posts = getPublishedPosts(); ?>
<?php require_once('./includes/header.php') ?>
<title>ResinArt</title>
</head>

<body>
	<?php include('./includes/navbar.php') ?>
	<div class="container">
		<?php include('./includes/banner.php') ?>
		<div class="flex justify-between py-4 items-center">
			<h2 class="text-2xl font-normal">Недавние записи</h2>
			<div>
				<div class="pt-2 relative mx-auto text-gray-600">
					<input id='search_field' class="border-1 border-gray-200 bg-white h-10 px-5 pr-16 rounded text-sm focus:outline-none" type="search" name="search" value='<?php echo $_GET['search'] ?>' placeholder="Поиск">
					<button type="submit" onClick='search()' class="absolute right-0 top-0 mt-5 mr-3">
						<svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
							<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
						</svg>
					</button>
				</div>
			</div>
		</div>
		<div class="flex flex-wrap gap-4">
			<?php foreach ($posts as $post) : ?>
				<div class="flex flex-col flex-none break-inside bg-white overflow-hidden border-gray-200 shadow-sm p-3 hover:shadow-md duration-75">
					<div class="text-justify text-sm">
						<div class="flex justify-between items-center">
							<span class="text-right text-xs hover:underline">
								<?php if (isset($post['topic']['name'])) : ?>
									<a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>" class="btn category">
										<?php echo $post['topic']['name'] ?>
									</a>
								<?php endif ?>
							</span>
							<span class="text-right text-xs">
								<?php echo date("F j, Y ", strtotime($post["created_at"])); ?>
							</span>
						</div>
						<a class="font-bold text-2xl hover:underline" href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
							<?php echo $post['title'] ?>
						</a>
						<img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="mt-2 object-fill rounded max-h-72" alt="">
					</div>
					<div class="w-full text-right mt-4">
						<a class="text-green-400 uppercase font-bold text-sm hover:underline" href="single_post.php?post-slug=<?php echo $post['slug']; ?>">Читать больше</a>
					</div>
				</div>
			<?php endforeach ?>
		</div>
		<?php include('./includes/footer.php') ?>
</body>

</html>

<script>
	const input = document.getElementById('search_field')

	input.addEventListener("keyup", function(event) {
		if (event.keyCode === 13) {
			event.preventDefault();
			search();
		}
	});

	function search() {
		const url = new URL(document.location);
		url.searchParams.set('search', input.value);

		document.location.href = url
	}
</script>