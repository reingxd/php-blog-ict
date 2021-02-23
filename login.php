<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/header.php'); ?>
<title>Артистический блог</title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>

        <div style="width: 40%; margin: 20px auto;">
            <form method="post" action="login.php">
                <h2>Логин</h2>
                <?php include(ROOT_PATH . '/includes/errors.php') ?>
                <input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="btn" name="login_btn">Login</button>
                <p>
                    Еще не зарегестрированы? <a href="register.php">Зарегестриоваться</a>
                </p>
            </form>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>