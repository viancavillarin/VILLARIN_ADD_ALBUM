<?php  
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "viancakes";
$dsn = "mysql:host={$host};dbname={$dbname}";

$pdo = new PDO($dsn,$user,$password);
$pdo->exec("SET time_zone = '+08:00';");
date_default_timezone_set('Asia/Manila');
?>