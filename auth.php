<!-- Файл для авторизации пользователя -->

<?php
    //Фильтруем поле ввода как обычную строку, удаляем пробелы и удаляем лишние символы
    $login = filter_var(trim($_POST['loginin']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['passwordin']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 3 || mb_strlen($login) > 50){
        echo '<h1>Недопустимая длина логина (от 3 до 50)</h1>';
        exit();
    }elseif(mb_strlen($password) < 3 || mb_strlen($password) > 32){
        echo '<h1>Недопустимая длина пароля (от 3 д о 32)</h1>';
        exit();
    }
    //Хеширование пароля
    $password = md5($password.'sdfhgh2634');
    //Подключение базы данных и получение данных из полей, после всего закрываем соединение и возвращаемся на главную страницу
    require 'connectDB.php';
    $signin = $mysql -> query("SELECT * FROM users WHERE name = '$login' AND password = '$password'");
    $user = $signin -> fetch_assoc();
    if(count($user) == 0){
        echo '<h1>Пользователь не найден</h1>';
        exit();
    }
    //Запоминаешь с помощью куки имя пользователя, который вошел в систему
    setcookie("user", $user["name"], time() + 3600);

    $mysql -> close();
    header('Location: /Lab%201/blog.php');
?>