<!DOCTYPE html>
<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="ajax.js"></script>
<link rel="stylesheet" type="text/css" href="css/sideMenu.css">
<script type="text/javascript" src="menu.js"></script>
 
<body style="background-color:#f6f5fb"></body>
<body>
	<?
    require('temp/template.php'); // Подключаем файл с классом
    $parse->get_tpl('temp/menu.tpl'); //Файл который мы будем парсить
    $parse->tpl_parse(); //Парсим
    echo $parse->template; //Выводим нашу страничку
  	?>
  <div id="mainpage">
      <div class = "helloblok">
		<div class = "hi">
			Добро пожаловать в планировщик!
		</div>
		<div class = "osnovntext">
			Укажите все имеющиеся параметры и получите выгодный <br>
			маршрут по путешествию в питере. 
		</div>
	  </div>
	  <div class = "mini">
		<img src="img/logos/timer.png" width=24px heigth=24px>
		<div class = "map">
			<img src="img/logos/map.png" width=170px heigth=170px>
		</div>
		<div class = "timeword">
			Время
		</div>
		<div class = "time">
			21:20
		</div>
		<div class = "location">
			Локация <br>
			Санкт - петербург
		</div>
	  </div>
	  <form action="constructorMake.php" method="GET">
	  <div class = "dataset">
		<div class = "youmon">
			<div class = "port">
				<img src="img/logos/moneys.png" width=100px heigth=100px>
			</div>
			<div class = "money">
				Введите бюджет на отдых<br><br>
				Ваши средства - 
			</div>
			<input type="text" class="getmoney" placeholder="Число:" name="sales">
		</div>
		<div class = "palka">
		</div>
		<div class = "youtran">
			<div class = "tran">
				<img src="img/logos/transport.png" width=100px heigth=100px>
			</div>
			<div class = "transport">
				Выберите транспорт<br><br>
				<p>
					<input type="radio" name="drink1" value="Поезд"> Поезд
					<input type="radio" name="drink2" value="Самолет"> Самолет
				</p>
			</div>
		</div>
		<div class = "palka1">
		</div>
		<div class = "youday">
			<div class = "dayl">
				<img src="img/logos/day.png" width=100px heigth=100px>
			</div>
			<div class = "money">
				Введите количество дней<br><br>
				Кол-во дней - 
			</div>
			<input type="text" class="getday" placeholder="Число:" name="days">
		</div>
	  </div>
	  	<input type="submit" class = "namebtn" value = "Подобрать">
	  </form>
	  <div class = "hotel">
		<div class = "namehost">
			Отели и хостелы
		</div>
		<div class = "bed">
			<img src="img/logos/bed.png" width=24px heigth=24px>
		</div>
		<div class = "hotelthis">
			Не выбрано
		</div>
		<hr>
		<!-- <div class = "kolvoday">
			Колличество дней :
		</div>
		<div class = "kolvo">
			5
		</div>
		<div class = "price">
			Цена отеля :
		</div>
		<div class = "kolvoprice">
			5 000
		</div> -->
	  </div>
	  <div class = "ticket">
		<div class = "tickets">
			Билеты
		</div>
		<div class = "tic">
			<img src="img/logos/tick.png" width=24px heigth=24px>
		</div>
		<!-- <div class = "where">
			Орел - Санкт - Петербург
		</div>
		<div class = "rzd">
			<img src="img/logos/rzd.png" width=50px heigth=50px>
		</div>
		<div class = "whereot">
			Орловский ж/д 
		</div>
		<div class = "wheretuda">
			Санкт - Петербургский ж/д
		</div> -->
		<div class = "hotelthis">
			Не выбрано
		</div>
		<hr>
	  </div>
	  <div class = "musems">
		<div class = "namemusems">
			Достопримечательности
		</div>
		<div class = "mus">
			<img src="img/logos/musem.png" width=24px heigth=24px>
		</div>
		<div class = "hotelthis">
			Не выбрано
		</div>
		<hr>
		<!-- <div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div>
		<div class = "place">
			Эрмитаж
		</div> -->
	  </div>
	  <div class = "dayer">
	  <div class = "hotelthis">
			Не выбрано
		</div>
		<hr>
	  </div>
	  <div class = "marsh">
	  <div class = "hotelthis">
			Не выбрано
		</div>
		<hr>
	  </div>
  </div>
 
  <div id="chartContainer" class="graph"></div>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>