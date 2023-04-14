<?php
//подключение меню
include("header.php");

?>
<!--Подключение скрипта регистрации-->
<script src="scripts/register_check.js"></script>

<main>
    <div class="register">
        <!--Форма регистрации-->
        <form method="POST">
        <p>Регистрация:</p>
            <input name="Name" type="text" placeholder="Имя">
            <input name="Surname" type="text" placeholder="Фамилия">
            <input name="Patronymic" type="text" placeholder="Patronimic">
            <input name="Login" type="text" placeholder="Логин" maxlength="24">
            <input name="Email" type="email" placeholder="E-mail" required>
            <input name="Password" type="password" placeholder="Пароль" pattern=".{6,}">
            <input name="Password_check" type="password" placeholder="Повторите пароль">
            <div><input type="checkbox">Согласие с правилами регистрации</div>
            <input type="button" value="Зарегестрироваться" onclick="registerCheck();">
        </form>
    </div>
</main>

<? //подключение подвала
include("footer.php");?>