<?php
function getUsersNumber()
{
    global $conn;
    $sql = "SELECT 'id' FROM users";
    $result = mysqli_query($conn, $sql);
    $number = mysqli_num_rows($result);
    return $number;
}
function getPostsNumber()
{
    global $conn;
    $sql = "SELECT 'id' FROM posts";
    $result = mysqli_query($conn, $sql);
    $number = mysqli_num_rows($result);
    return $number;
}
function getCommentsNumber()
{
    global $conn;
    $sql = "SELECT 'id' FROM comments";
    $result = mysqli_query($conn, $sql);
    $number = mysqli_num_rows($result);
    return $number;
}
