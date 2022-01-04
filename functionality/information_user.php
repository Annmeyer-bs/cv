<?php

require_once 'db_connection.php';

if (!$_SESSION['user']) {
    (header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=login'));
}
global $connect;
$sql = mysqli_query($connect, "SELECT * FROM `user` WHERE `id`={$_SESSION['user']['id']}");
$up = mysqli_fetch_array($sql);
