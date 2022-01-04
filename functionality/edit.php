<?php
session_start();
require_once 'db_connection.php';
global $connect;
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
    //if ($_FILES['photo']['size'] > 0) {
    if ($_FILES["photo"]["size"] > 0) {
            $photo = ",`photo`='$photot'";
    } else {
            $photo = "";
    }
    $res = mysqli_query($connect, "UPDATE `user` SET	`name`='$name',`email`='$email',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp'{$photo}	WHERE	`id`='$id'");

    $_SESSION['Message'] = 'Изменения	прошли	успешно';
    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
}
//        $photot = 'photo/' . time() . $_FILES['photo']['name'];
//        if (move_uploaded_file($_FILES['photo']['tmp_name'], '../' . $photot)) {
//            $_SESSION['Message'] = 'Загрузка	фото	неудалась';
//            header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=edit');
//        }
//        $res = mysqli_query($connect, "UPDATE `user` SET	`name`='$name',`email`='$email',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp', `photo`='$photot'	WHERE	`id`='$id'");
//        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
//    } else {
//
//        $res = mysqli_query($connect, "UPDATE `user` SET	`name`='$name',`email`='$email',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp'	WHERE	`id`='$id'");
//
//        header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
//    }

//    $sql="UPDATE users SET firstname=(:firstname), lastname=(:lastname), email=(:email), mobile=(:mobile), Image=(:image) WHERE id=(:idedit)";
//    $query = $dbh->prepare($sql);
//    $query-> bindParam(':firstname', $firstname, PDO::PARAM_STR);
//    $query-> bindParam(':lastname', $lastname, PDO::PARAM_STR);
//    $query-> bindParam(':email', $email, PDO::PARAM_STR);
//    $query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
//    $query-> bindParam(':image', $image, PDO::PARAM_STR);
//    $query-> bindParam(':idedit', $idedit, PDO::PARAM_STR);
//    $query->execute();
//    $msg="Information Updated Successfully";
//}
//
//$photot='photo/'	.	time()	.	$_FILES['photo']['name'];
//if(move_uploaded_file($_FILES['photo']['tmp_name'], '../'	.$photot)) {
//    $_SESSION['Message'] = 'Загрузка	фото	неудалась';
//    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=edit');
//}
//    $id = $_SESSION['user']['id'];
//    $res = mysqli_query($connect, "UPDATE `user` SET	`name`='$name',`email`='$email',`adress`='$adress',`links`='$links', `education`='$education',`skills`='$skills',`profile`='$profile', `proexp`='$proexp', `photo`='$photot'	WHERE	`id`='$id'");
//
//    $_SESSION['Message'] = 'Изменения	прошли	успешно';
//    header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
//}
