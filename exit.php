<?php
//Сокращаем длительность запоминания куки, для того, чтобы очистить его
setcookie('name', $user["name"], time() - 3600, "/");
header('Location: /Lab%201');
?>