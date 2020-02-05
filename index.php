<?php
include("db.php");
$users = $database->select("users", "*");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="db.php" method="post">
        <h3>Добавление нового юзера:</h3>
        <input type="text" name="login"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Зарегистрироваться" name="new">
    </form>

    <br><br>

    <form action="db.php" method="post">
        <h3>Редактировать данные юзера:</h3>
        <input type="text" name="login" placeholder="Логин"><br><br>
        <input type="text" name="newlogin" placeholder="Новый логин"><br><br>
        <input type="password" name="newpassword" placeholder="Новый пароль"><br><br>
        <input type="submit" value="Сохранить" name="update">
    </form>

    <br><br>

    <h3>Зарегистрированные пользователи:</h3>

    <?php
        for($i = 1; $i < count($users); $i++){
            ?>

            <p><?php echo $i ?>)</p>
            <p>Логин: <?php echo $users[$i]["login"] ?></p>
            <p>Пароль: <?php echo $users[$i]["password"] ?></p>
            <br><br>

            <?php
        }
    ?>

</body>
</html>