<?php include('config.php'); ?>
<?php include('includes/registration_login.php'); ?>
<?php include('includes/header.php'); ?>
<title>ResinArt</title>
</head>

<body>
    <?php include(ROOT_PATH . '/includes/navbar.php'); ?>
    <div class="container">

        <div class="flex items-center justify-center">
            <div class="w-full max-w-md">
                <form method="post" action="login.php">
                    <div class="text-gray-800 text-2xl flex justify-center border-b-2 py-2 mb-4">
                        Регистрация
                    </div>
                    <?php include(ROOT_PATH . '/includes/errors.php') ?>
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                            Логин
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="text" name="username" value="<?php echo $username; ?>" placeholder="Username" />
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-normal mb-2" for="password">
                            Пароль
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password_1" placeholder="Password" required autocomplete="current-password" />
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-normal mb-2" for="password">
                            Пароль (Еще раз)
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password_2" placeholder="Password" required autocomplete="current-password" />
                    </div>
                    <div class="mb-3">
                        <label class="block text-gray-700 text-sm font-normal mb-2" for="username">
                            Почта
                        </label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" value="<?php echo $email ?>" placeholder="Email" />
                    </div>
                    <div class="flex items-center justify-between">
                        <button class="px-8 py-3 rounded text-white inline-block text-white font-bold uppercase text-xs rounded bg-blue-500 hover:bg-blue-600 focus:bg-blue-700" type="submit" name="reg_user">
                            Зарегестриоваться
                        </button>
                        <a href="login.php" class="inline-block align-baseline font-normal text-sm text-blue-500 hover:text-blue-800">
                            Уже участник? Войти
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include(ROOT_PATH . '/includes/footer.php'); ?>