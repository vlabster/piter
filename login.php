<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/sideVhod.css">
<script type="text/javascript" src="menu.js"></script>

<body style="background-color:#f6f5fb"></body>

<body>
  <!-- <div id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div>
      <ul>
        <li></li>
        <div class="logootst">
          <li><img src="img/logos/logobl.png" width=50px heigth=50px></li>
        </div>
      </ul>
    </div>
    <ul>
      <li> </li>
      <div class="otst">
        <li>
          <div class="col"><img src="img/logos/home_btn.png" width=24px heigth=24px>&nbsp;&nbsp;&nbsp;</div>
        </li>
        <li><img src="img/logos/person_btn.png" width=24px heigth=24px>&nbsp;&nbsp;&nbsp;</li>
        <li><img src="img/logos/games_btn.png" width=24px heigth=24px>&nbsp;&nbsp;&nbsp;</li>
        <li>
          <div class="exit"><img src="img/logos/info_btn.png" width=24px heigth=24px>&nbsp;&nbsp;&nbsp;</div>
        </li>
      </div>
    </ul>
  </div> -->
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
        Войти
      </div>
      <div class="search">
        <form action="actions/login.php" method="GET">
          <input type="text" class="get" placeholder="Почта:" name="email"><br><br>
          <input type="password" class="get" placeholder="Пароль:" name="password"><br><br>
      </div>
      <div class="btnreg">
        <input type="submit" class="namebtn" value="Войти">
      </div>
      </form>
    </div>
  </div>


  <div id="chartContainer" class="graph"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>