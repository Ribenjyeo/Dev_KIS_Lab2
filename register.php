<!-- Файл для регистрации пользователя -->

<?php
    //Фильтруем поле ввода как обычную строку, удаляем пробелы и удаляем лишние символы
    $login = filter_var(trim($_POST['loginout']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['emailout']), FILTER_VALIDATE_EMAIL);
    $password = filter_var(trim($_POST['passwordout']), FILTER_SANITIZE_STRING);

    if(mb_strlen($login) < 3 || mb_strlen($login) > 50){
        echo '<h1>Недопустимая длина логина (от 3 до 50)</h1>';
        exit();
    } elseif(mb_strlen($email) < 5 || mb_strlen($email) > 50){
        echo '<h1>Почта указана не корректно</h1>';
        exit();
    }elseif(mb_strlen($password) < 3 || mb_strlen($password) > 32){
        echo '<h1>Недопустимая длина пароля (от 3 д о 32)</h1>';
        exit();
    }
    //Хеширование пароля
    $password = md5($password.'sdfhgh2634');
    //Подключение базы данных и получение данных из полей, после всего закрываем соединение и возвращаемся на главную страницу
    require 'connectDB.php';
    $mysql -> query("INSERT INTO users (name, password, email) VALUES ('$login', '$password', '$email')");
    $mysql -> close();
    header('Location: /Lab%201/');
?>