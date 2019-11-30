<?php
    include '../db.php';
    // var_dump($_REQUEST);
    $link = connect();
    $name = $_REQUEST['name'];
    $surname = $_REQUEST['surname'];
    $fathername = $_REQUEST['fathername'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password1 = $_REQUEST['password1'];
    $password2 = $_REQUEST['password2'];
    if ($password1 != $password2) {
        echo("Пароли не совпадают!");
        exit;
    }
    if (strlen($password1) < 8) {
        echo("Пароль слишком короткий!");
        exit;
    }
    $email = str_replace(' ', '', $email);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) !== false) {
        echo("Неверный emal");
        exit;
    }
    else {
        $query = "SELECT email from user where user.email = '$email'";
        $res = $link->query($query);
        while ($row = $res->fetch_assoc()) {
            var_dump($row);
            if (isset($row['email'])) {
                echo ("Данный email уже зарегистрирован!");
                exit;
            }
        }
    }
    $password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "INSERT into user(name, surname, fathername, phone, email, password) values('$name', '$surname', '$fathername', '$phone', '$email', '$password')";
    // var_dump($query);
    $link->query($query);
    // var_dump($link->error);
    header("Location: http://piter/login.html");
?>
<script>
    window.location.href("http://piter/login.html");
</script>
