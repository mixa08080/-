function loginCheck() {
    document.querySelectorAll('.error').forEach(e => e.remove());
    //считывание информации из формы авторизации
    var login = document.querySelector("input[name='Login']");
    var password = document.querySelector("input[name='Password']");
    var form = "Login="+login.value+"&Password="+password.value;
    //Запрос на авторизацию
    var login_check = new XMLHttpRequest();
    login_check.open("POST", "../php/login.php", false);
    login_check.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    login_check.onreadystatechange = function () {
        if (login_check.readyState == 4 && login_check.status == 200) {

            if (login_check.response == "false") {
                //Вывод ошибки авторизации
                document.querySelector("input[name=\'Login\']").insertAdjacentHTML("beforebegin",
                    '<p class="error" style="color: red;"> Ошибка логина или пароля </p>');
            }
            else{
                location.href="../index.php?message=Вы успешно авторизировались";
            }
        }
    }
    login_check.send(form);
}