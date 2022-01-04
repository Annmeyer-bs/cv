<?php
session_start();
require_once 'db_connection.php';
if (isset($_POST['login_form'])) {
    $login = trim($_POST['login']);
    $password = md5(trim($_POST['password']));
    login_in($login, $password);
}
if (isset($_POST['register_form'])) {
    $login = trim($_POST['register_log']);
    $password = md5(trim($_POST['password']));
    $email = trim($_POST['email']);
    $pass_rep = md5(trim($_POST['password2']));
    register_in($login, $email, $password, $pass_rep);
}

function login_in($login, $password)
{
    global $connect;
    if ($login != "" && $password != "") {
        $check_login = mysqli_query($connect, "SELECT	* FROM `user` WHERE `login`='$login'");
        var_dump(mysqli_num_rows($check_login));
        if (mysqli_num_rows($check_login) == 1) {
            $user = mysqli_fetch_assoc($check_login);
            var_dump($check_login);
            if ($password == $user['password']) {
                setcookie("login", $user['login'], time() + 50000);
                setcookie("password", md5($user['login'] . $user['password']), time() + 50000);
                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "name" => $user['name'],
                    "photo" => $user['photo'],
                    "email" => $user['email'],
                    "phone" => $user['phone']];
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
            } else {
                $_SESSION['Message'] = "Неверный пароль";
                header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=login');
            }
        } else {
            $_SESSION['Message'] = "Неверный логин и пароль";
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=login');;
        }
    } else {
        $_SESSION['Message'] = "Поля не должны быть пустыми!";
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=login');
    }
}

function register_in($login, $email, $password, $pass_rep)
{
    global $connect;
    if ($login != "" && $email != "" && $password != "" && $pass_rep != "") {
        if ($password == $pass_rep) {
            mysqli_query($connect, "INSERT INTO `user`( `email`,`login`, `password`) VALUES('$email','$login','$password')");
            $_SESSION['Message'] = "Регистрация прошла успешна";
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=login');
        } else {
            $_SESSION['Message'] = 'Пароли не совпадает';
            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=register');
        }
    } else {
        $_SESSION['Message'] = "Поля не должны быть пустыми!";
        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=register');
    }
}

//        $_SESSION['Message'] = 'Пароль не совпадает';
//    }
//    if (!$pass_rep) {
//        $_SESSION['Message'] = 'Введите повторный пароль';
//    }
//    if (!$email) {
//        $_SESSION['Message'] = 'Введите email';
//    }
//  if (!$login) {
//      $_SESSION['Message'] = 'Введите login';
//    }
//  if (!$_SESSION['Message']) {
//
//$email=$_POST['email'];
//$login=$_POST['register_log'];
//$password_1 = $_POST['password'];
//$password_2 =  $_POST['password2'];
//if ($password_2 == "") {
//    echo  "Пароль не подтвержден. Пожалуйста, повторите ввод пароля";
//}
//else {
//    if ($password_1 != $password_2) {
//        echo "В полях 'Пароль' комбинации символов не совпадают";
//    }
//    else{
//        $password=md5(trim($password_1));
//
//        mysqli_query($connect,"INSERT INTO `user`( `email`,`login`, `password`) VALUES('$email','$login','$password')");
//        $_SESSION['Message']='Регистрация	прошла	успешна';
//        header('Location:	http://www.nsv/?p=login');
//    }
