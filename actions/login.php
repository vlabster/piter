<?php
    include '../db.php';
    $link = connect();
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    //$password = password_hash($password1, PASSWORD_DEFAULT);
    $query = "SELECT password, email from user where user.email = '$email'";
    $res = $link->query($query);
    while ($row = $res->fetch_assoc()) {
        // password_verify ( string $password , string $hash )
        if (!password_verify($password, $row['password'])) {
            echo ("Неверный пароль!");
            exit;
        }
        if ($row['email'] != $email) {
            echo ("Неверный email!");
            exit;
        }
    }
    header("Location: http://piter");
?>
<script>
    window.location.href("http://piter");
</script>
