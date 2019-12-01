<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/sideGlav.css">
<script type="text/javascript" src="menu.js"></script>
<body style="background-color:#f6f5fb"></body>

<body>
  <div style="margin-left: 90%; margin-top:1%;">
  <a href="register.php">Регистрация</a><br><br>
  <a href="login.php">Вход</a>
  </div>
  
  <?
  require('temp/template.php'); // Подключаем файл с классом
  $parse->get_tpl('temp/menu.tpl'); //Файл который мы будем парсить
  $parse->tpl_parse(); //Парсим
  echo $parse->template; //Выводим нашу страничку
  ?>
  <div id="mainpage">
    <div class="searchbar">
      <div>
        <br />
        <br />
        <div class="get">
          <p>Спланируйте свой отдых легко<br>
            и просто с помощью нашего сервиса</p>
          <div class="gets">
            Вы можете воспользоваться конструктором или<br>
            воспользуйтесь опытом других людей.
          </div>
        </div>
        <br />
        <div class="wrap">
          <div class="search">
            <input type="text" class="searchTerm" placeholder="Попробуй прямо сейчас">
            <button type="submit" class="searchButton">Попробовать</button>
          </div>
        </div>
        <br />
        <br />
        <div class="logos">
          <div class="col5">
            <img src="img/logos/soc.png" style="width:15%">
          </div>
          <div class="col2">
            ИзгОрла
          </div>
          <div class="col2">
            <p>Bonch.Hack</p>
          </div>
          <div class="col2">

            <p>Gazprom</p>
          </div>
        </div>
        <div class="kak">
          <img src="img/logos/kak.png" width=80% heigth=240px>
        </div>

        <!-- <div class="pctext">
          wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww
        </div> -->
      </div>
    </div>
  </div>

  <div id="chartContainer" class="graph"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>