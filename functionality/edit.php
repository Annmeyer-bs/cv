<?php
session_start();
$connect = require 'db_connection.php';
//global $connect;
$id = $_SESSION['user']['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$links = $_POST['links'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$profile = $_POST['profile'];
$proexp = $_POST['proexp'];

$photot = 'photo/' . time() . $_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $photot);
if (isset($_POST['edit_form'])) {
    if ($_FILES['photo']['size'] > 0) {
            $photo = ",`photo`='$photot'";
    } else {
            $photo = "";
    }
    $res = mysqli_query($connect, "UPDATE `user` SET	`name`='$name',`email`='$email',`phone`='$phone',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp'{$photo}	WHERE	`id`='$id'");

    $_SESSION['Message'] = 'Изменения	прошли	успешно';
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
}

