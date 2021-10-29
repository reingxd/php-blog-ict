<?php

if ($_SESSION['user']['role'] != 'Admin') {
    header('location: ' . BASE_URL);
    exit(0);
}
