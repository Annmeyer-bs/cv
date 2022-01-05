<?php
$connect = mysqli_connect('www.nsv', 'test', 'root', 'test');
if (!$connect) {
    die('Error	connect');
}

return $connect;