<?php
$task = $_POST['task'];
if ($task == '') {
    echo '<h1>Введите само задание</h1>';
    exit();
}

require 'configDB.php';

$sql = 'INSERT INTO tasks(task) VALUES(:task)';
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /to-do.php');
