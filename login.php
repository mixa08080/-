<?php
//подключение меню
include("header.php");

?>
<!--подключение скрипта авторизации -->
<script src="scripts/login_check.js"></script>

<main>
    <div class="register">
        <!--Форма авторизации-->
        <form method="POST">
        <p>Авторизация:</p>
            <input name="Login" type="text" placeholder="Логин">
            <input name="Password" type="password" placeholder="Пароль">
            <input type="button" value="Войти" onclick="loginCheck();">
        </form>
    </div>
</main>

<? 
//подключение подвала
include("footer.php");?>