<?php
session_start();

require 'pages/header.html';
require_once 'pages/menu.php';
//$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//
//$url = $_SERVER['QUERY_STRING'];
//echo $_SERVER['HTTP_HOST'];
//$url_get = substr(strrchr($url, "?"), 1);
//echo $_SERVER['REQUEST_URI'];
//if (isset($_GET['p'])){

$page = $_GET['p'] . '.php';
if (is_file('pages/' . $page) == false) {
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/?p=main');
} elseif ((is_file('pages/' . $page) == true)) {
    require "pages/" . $page;
}

require 'pages/footer.html';