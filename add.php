<?php
$task = $_POST['task'];
if ($task == '') {
 echo "Введите само задание";
 exit();
}
//$host = '127.0.0.1';
//$db   = 'to-do';
//$user = 'root';
//$pass = '';
//$charset = 'utf8';

require 'configDB.php';
$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);
header('Location: /');