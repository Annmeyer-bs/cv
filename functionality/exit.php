<?php
//   for logout -->
session_start();
//unset($_SESSION["user"]);
session_destroy();
SetCookie("login", "");
SetCookie("password", "");
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/?p=main');
