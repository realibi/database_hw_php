<?php

require 'vendor/autoload.php';
 
use Medoo\Medoo;
 
$database = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'database_hw_db',
	'server' => '127.0.0.1:8889',
	'username' => 'root',
    'password' => 'root'
]);

if(isset($_POST["new"])){
    $database->insert("users", [
        "login" => $_POST["login"],
        "password" => $_POST["password"]
    ]);

    echo "Новый пользователь успешно добавлен!<br>";
    echo "<a href='index.php'>Назад</a>";
}

if(isset($_POST["update"])){
    $database->update("users", 
    [
        "login" => $_POST["newlogin"],
        "password" => $_POST["newpassword"]
    ], 
    [
        "login" => $_POST["login"]
    ]);

    echo "Данные пользователя успешно изменены!<br>";
    echo "<a href='index.php'>Назад</a>";
}

?>