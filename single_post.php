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
<title> <?php echo $post['title'] ?> | Авторский блог студии "ResinArt"</title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
        <div class="content">
            <div class="post-wrapper">
                <div class="full-post-div">
                    <?php if ($post['published'] == false) : ?>
                        <h2 class="post-title">Этот пост еще не создан</h2>
                    <?php else : ?>
                        <h2 class="post-title"><?php echo $post['title']; ?></h2>
                        <div style='display:flex; justify-content:center'>
                            <img style='width:40%;' src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" alt="<?php echo $_GET['post-slug']; ?>">
                        </div>
                        <div class="post-body-div">
                            <?php echo html_entity_decode($post['body']); ?>
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <div class="post-sidebar">
                <div class="card">
                    <div class="card-header">
                        <h2>Темы</h2>
                    </div>
                    <div class="card-content">
                        <?php foreach ($topics as $topic) : ?>
                            <a href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                                <?php echo $topic['name']; ?>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ($_SESSION['user'] && $post['published'] == true) : ?>
            Оставить комментарий к посту:
            <br><br>
            <form method="post" action="<?php echo './single_post.php?post-slug=' . $_GET['post-slug']; ?>">
                <textarea name='comment' id='comment' style='width:70%;' rows="8"></textarea>
                <br /><br />
                <button class="btn" type="submit">Опубликовать</button>
            </form>
        <?php endif ?>
        <?php foreach ($comments as $comment) : ?>
            <?php echo getUser($comment['user_id'])['username'] . ': ' . $comment['comment']; ?><br />
        <?php endforeach ?>
    </div>

    <?php include(ROOT_PATH . '/includes/footer.php'); ?>