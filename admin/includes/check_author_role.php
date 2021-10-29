<?php

if ($_SESSION['user']['role'] != 'Admin' && $_SESSION['user']['role'] != 'Author') {
    header('location: ' . BASE_URL);
    exit(0);
}
