<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>

<?php include('includes/header.php'); ?>

<title>Артистический блог </title>
</head>

<body>
    <div class="container">
        <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
        <div style="width: 40%; margin: 20px auto;">
            <form method="post" action="register.php">
                <h2>Зарегистрироваться на Артистическом блоге</h2>
                <?php include(ROOT_PATH . '/includes/errors.php') ?>
                <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
                <input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
                <input type="password" name="password_1" placeholder="Password">
                <input type="password" name="password_2" placeholder="Password confirmation">
                <button type="submit" class="btn" name="reg_user">Зарегестриоваться</button>
                <p>
                   Уже участник? <a href="login.php">Войти</a>
                </p>
            </form>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>