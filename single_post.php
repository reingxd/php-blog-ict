<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php
if (isset($_GET['post-slug'])) {
    $post = getPost();
}
$topics = getAllTopics();
$comments = getPostComments();
?>
<?php include('includes/header.php'); ?>
<title><?php echo $post['title'] ?> | ResinArt</title>
</head>

<body>
    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <div class="container">
        <div class="flex flex-col">
            <div class="flex flex-col">
                <?php if ($post['published'] == false) : ?>
                    <h2 class="text-2xl font-normal">Этот пост еще не создан</h2>
                <?php else : ?>
                    <div class="flex flex-col">
                        <h2 class="text-2xl font-normal mb-2"><?php echo $post['title']; ?></h2>
                        <img class="rounded" style='width:40%;' src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="<?php echo $_GET['post-slug']; ?>">
                    </div>
                    <div class="my-2 font-normal text-lg">
                        <?php echo html_entity_decode($post['body']); ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="flex flex-col">
                <h2 class="text-2xl font-normal mb-2">Темы</h2>
                <div class="flex gap-1">
                    <?php foreach ($topics as $topic) : ?>
                        <a class="hover:underline px-2 py-1 bg-gray-100" href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                            <?php echo $topic['name']; ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
        <?php if ($comments) : ?>
            <h2 class="text-2xl font-normal my-2">Комментарии</h2>
        <?php endif ?>
        <div class="flex flex-col gap-1">
            <?php foreach ($comments as $comment) : ?>
                <div class="bg-white dark:bg-gray-800 text-black dark:text-gray-200 antialiased flex max-w-lg">
                    <div>
                        <div class="bg-gray-100 dark:bg-gray-700 rounded pt-2 pb-2.5">
                            <div class="font-semibold text-sm leading-relaxed px-2.5">
                                @<?php echo getUser($comment['user_id'])['username'] ?>
                            </div>
                            <div class="text-normal leading-normal px-3">
                                <?php echo $comment['comment']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <?php if ($_SESSION['user'] && $post['published'] == true) : ?>
            <h2 class="text-2xl font-normal my-2">
                Оставить комментарий к посту:
            </h2>
            <form method="post" action="<?php echo './single_post.php?post-slug=' . $_GET['post-slug']; ?>">
                <div class="flex flex-col items-start gap-3">
                    <textarea name='comment' id='comment' class="w-1/2" rows="4"></textarea>
                    <button class="px-8 py-3 rounded text-white inline-block text-white font-bold uppercase text-xs rounded bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit">
                        Опубликовать
                    </button>
                </div>
            </form>
        <?php endif ?>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>