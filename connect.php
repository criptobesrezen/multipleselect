<?php
$host   = "localhost";
$user   = "bdfbl";
$pass   = "bdfb2";
$dbname = "db_library";

// Создание подключения
$con = mysqli_connect($host, $user, $pass, $dbname);
$con->set_charset("utf8");
// Проверка подключения
if(!$con) {
    die('Ошибка подключения: '.mysqli_connect_error());
}
?>