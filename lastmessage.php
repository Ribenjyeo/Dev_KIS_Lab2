<!-- Файл для добавления всех сообщений из БД на страницу blog.php -->

<?php
require 'connectDB.php';
//Получение всех данных из таблицы message с обратной сортировкой для вывода сначала последних сообщений
$outmessage = $mysql -> query("SELECT * FROM message ORDER BY id DESC LIMIT 1 ");
//Преобразование в массив данных из таблицы message и представление в виде html
while($row = $outmessage -> fetch_assoc()){
   echo '<div class="card messageinput">';
        echo '<div class="card-header">';
            echo '<div class="d-flex justify-content-between align-items-center">';
                echo '<div class="d-flex justify-content-between align-items-center">';
                    echo '<div class="ml-2">';
                        echo '<div class="h5 m-0">';
                        echo '<div class="teg">';
                        echo '</div>';
                            echo "@";
                            echo $row['name']; //вывод имени пользователя
                        echo '</div>';
                    echo '</div>';
                echo '</div>';
            echo ' </div>';

        echo ' </div>';
        echo ' <div class="card-body"> ';
            echo '<div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>';
                echo $row['data']; //вывод даты публикаци в формате (2021-09-09 05:16:29)
            echo '</div> ';
                echo '<p class="card-text">';
                    echo $row['text']; //вывод сообщения, который добавлял пользователь
                echo '</p>';
        echo '</div>';
            echo '<div class="card-footer">';
                echo '<a href="delete.php?id='.$row['id'].'" class="card-link"><i class="fa fa-gittip"></i>Delete</a>'; //делаем ссылку на файл удаления записи с сохранением id
                echo '<a href="edit.php?id='.$row['id'].'" class="card-link"><i class="fa fa-comment"></i>Edit</a>'; //делаем ссылку на файл с изменением записи с сохранением id
            echo ' </div>';
    echo '</div> ';
}
$mysql -> close();


    
?>