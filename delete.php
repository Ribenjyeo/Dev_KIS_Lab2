<!-- Файл для удаления записи -->

<?php
require 'connectDB.php';

$id = $_GET['id']; //Получаем текущий id

$sql = "DELETE  FROM message WHERE id = '$id'";
$query = $mysql->prepare($sql); //Подготовка запроса для корректного форматирования
$query->execute(); //запуск подготовленного запроса

header('Location: /Lab2/blog.php');
?>