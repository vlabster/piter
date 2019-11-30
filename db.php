<?php
function connect() {
    $host = 'piter'; // адрес сервера 
    $database = 'piter'; // имя базы данных
    $user = 'root'; // имя пользователя
    $password = ''; // пароль
    $link = mysqli_connect($host, $user, $password, $database) 
        or die("Ошибка " . mysqli_error($link));
    return $link;
}
?>