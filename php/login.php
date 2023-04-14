<?php
    session_start();
    include "connect.php";
    //создание запрос на авторизацию
    $sql = sprintf("SELECT * FROM `users` WHERE `login`='%s'", $_POST["Login"]);
    if(!$result = $connect->query($sql))
        return die("Ошибка получения данных: ". $connect->query);
    if($user = $result->fetch_assoc())
    {//проверка корректности введённого пароля
        if($user["password"] == $_POST["Password"]) 
        {
            $_SESSION["user_id"] = $user["user_id"];
            $_SESSION["role"] = $user["role"];
            //вывод результата
            echo "true";
        }else{echo "false";}
    }else{echo "false";}