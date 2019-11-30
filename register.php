<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/sideReg.css">
<script type="text/javascript" src="menu.js"></script>

<body style="background-color:#f6f5fb"></body>
<!-- <script>
  function register(data) {
    console.log(data);
  }
</script> -->

<body>
  <?
    require('temp/template.php'); // Подключаем файл с классом
    $parse->get_tpl('temp/menu.tpl'); //Файл который мы будем парсить
    $parse->tpl_parse(); //Парсим
    echo $parse->template; //Выводим нашу страничку
  ?>
  <div id="mainpage">
    <div class="profile">
    </div>
    <div class="reg">
      <div class="word">
        Регистрация
      </div>
      <div class="search">
        <form action="actions/registration.php" method="POST">
          <input type="text" class="get" placeholder="Имя:" name="name" autofocus required><br><br>
          <input type="text" class="get" placeholder="Фамилия:" name="surname" autofocus required><br><br>
          <input type="text" class="get" placeholder="Отчество:" name="fathername" autofocus required><br><br>
          <input type="text" class="get" placeholder="Номер телефона:" name="phone" autofocus required><br><br>
          <input type="text" class="get" placeholder="Email:" name="email" autofocus required><br><br>
          <input type="password" class="get" placeholder="Пароль:" name="password1" autofocus required><br><br>
          <input type="password" class="get" placeholder="Повторите пароль:" name="password2" autofocus required>
      </div>
      <div class="btnreg">
        <input type="submit" class="namebtn" value="Зарегистрироваиться">
      </div>
      </form>

    </div>
  </div>


  <div id="chartContainer" class="graph"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>