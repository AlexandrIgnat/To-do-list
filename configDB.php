<?php
$host = '127.0.0.1';
$db   = 'to-do';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, 'root', '');
?>