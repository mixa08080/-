function registerCheck() {
    document.querySelectorAll('.error').forEach(e => e.remove());
    //получение значений из формы регистрации
    var name = document.querySelector("input[name='Name']");
    var surname = document.querySelector("input[name='Surname']");
    var patronymic = document.querySelector("input[name='Patronymic']");
    var login = document.querySelector("input[name='Login']");
    var email = document.querySelector("input[name='Email']");
    var password = document.querySelector("input[name='Password']");
    var password_check = document.querySelector("input[name='Password_check']");
    //проверка на корректность ввода имени
    if ((!/^[а-яА-ЯёЁ\-\s]+$/.test(name.value)) || name.length < 1) {
        document.querySelector("input[name=\'Name\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Имя должно содержать только буквы русского алфавита, пробел и тире </p>');
    }
    //проверка на корректность ввода фамилии
    if ((!/^[а-яА-ЯёЁ\-\s]+$/.test(surname.value)) || surname.length < 1) {
        document.querySelector("input[name=\'Surname\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Фамилия должна содержать только буквы русского алфавита, пробел и тире </p>');
    }
    //проверка на корректность ввода очества
    if ((!/^[а-яА-ЯёЁ\-\s]+$/.test(patronymic.value))) {
        document.querySelector("input[name=\'Patronymic\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Очество должно содержать только буквы русского алфавита, пробел и тире </p>');
    }
    //проверка на корректность ввода логина
    if ((!/^[a-zA-Z0-9\-]+$/.test(login.value)) || login.length < 3) {
        document.querySelector("input[name=\'Login\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Логин должен содержать только буквы латинского алфавита, цифры или тире </p>');
    }
    //проверка на повтор логина
    var login_check = new XMLHttpRequest();
    login_check.open("GET", "../php/register_check.php?log=" + login.value, false);
    login_check.onreadystatechange = function () {
        if (login_check.readyState == 4 && login_check.status == 200) {
            if (login_check.response=="true") {
                document.querySelector("input[name=\'Login\']").insertAdjacentHTML("afterEnd",
                    '<p class="error" style="color: red;"> Логин уже занят </p>');
            }
        }
    }
    login_check.send();
    //проверка на корректность ввода e-mail
    if ((!/^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/.test(email.value))) {
        document.querySelector("input[name=\'Email\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;">Ошибка ввода E-mail</p>');
    }
    //проверка на корректность ввода пароля
    if (password.value.length < 5) {
        document.querySelector("input[name=\'Password\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Пароль должен содержатьминимум 6 символов </p>');
    }
    //проверка на корректность повторения пароля
    if (password_check.value != password.value) {
        document.querySelector("input[name=\'Password_check\']").insertAdjacentHTML("afterEnd",
            '<p class="error" style="color: red;"> Парольи должны совподать </p>');
    }
    //проверка на на наличие ошибок
    if (!(document.querySelectorAll('.error').length)) {
        //Запрос на регистрацию
        var form = document.querySelector("form");
        form.action="../php/register.php";
        form.submit();

    }

}