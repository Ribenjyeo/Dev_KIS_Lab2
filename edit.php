<!-- Файл для редактирования записей -->

<?php
require 'connectDB.php';

$id = $_GET['id']; //получение ID
setcookie('id', $id, time() + 10); //Запись ID в куки потому что он не сохраняется после нажатия на кнопку
$messageedit = $mysql -> query("SELECT * FROM message WHERE id = '$id'"); //получение текста изменяего сообщения
$ms = $messageedit -> fetch_assoc();
$textforedit = $ms['text'];

$newtext = $_GET['newmessage']; //запись нового сообщения в переменную

if( isset($_GET['button-edit'])){ //если кнопка нажата
    $id = $_COOKIE['id']; //получения поля id
    $newmessage = $mysql -> query("UPDATE message SET text = '$newtext', data = NOW() WHERE id = '$id'"); //обновление записи в бд
    header('Location: /Lab%201/blog.php');
}
?>

<html>
<head>
    <meta charset = "utf-8">
    <title>Гостевая кинга Куманек А.А.</title>
    <link rel = "stylesheet" type = "text/css" href = "blog.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
 <body>       
     <form action="blog.php">
        <div class = "cap cap-site">
            <h2>Редактор записей</h2>
        </div>
        <div class="user-exit" >
            <button type="submit" class="btn btn-exit">Отмена редактирования</button>
        </div>
    </form>
    <div class="card gedf-card">
        <form method="GET">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active">
                        <div class="form-group">
                            <textarea class="form-control" name="newmessage" rows="3"><?php echo $textforedit ?></textarea>  <!-- вывод сообщения для изменения -->
                        </div>
                    </div>
                </div>
                <div class="btn-toolbar justify-content-between">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-primary" name="button-edit">Изменить текст</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
