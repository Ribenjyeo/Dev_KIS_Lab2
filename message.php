<!-- Файл для записи публикации в БД -->

<?php
$message = $_GET['newmessage'];
$login = $_COOKIE['user'];
// Проверка введенных данных на пустоту
if($message == "" || !trim($message)){
    echo '<h1>Вы ничего не записали</h1>';
    exit();
}
// unset($file);
// $myObj -> message = $message;
// $myObj -> login = $login;
// $myObj -> data = date("Y-m-d H:i:s");
// $myJSON = json_encode($myObj);
// $file = fopen('lastnews.json','w+');
// fwrite($file, $myJSON);
// fclose($file);



//Подключение и вставка в таблицу message
require 'connectDB.php';
$mysql -> query("INSERT INTO message (name, text, data) VALUES ('$login', '$message', NOW())");
$mysql -> close();
// header('Location: /Lab%201/blog.php');

?>
