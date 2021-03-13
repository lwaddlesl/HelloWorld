<?php
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$massage = filter_var(trim($_POST['massage']), FILTER_SANITIZE_STRING);

if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "<h1>Не допустимое имя</h1>";
    exit();
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<h1>E-mail адрес '$email' указан не верно.</h1>";
    exit();
}
$mysql = new mysqli('localhost', 'root', 'root', 'register');
$mysql->query("INSERT INTO `users` (`email`, `name`, `massage`) VALUES('$email', '$name', '$massage')");
$mysql->close();
header('Location: /#contact');
