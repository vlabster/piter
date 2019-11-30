<!DOCTYPE html>
<meta charset="utf-8">
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
		<div class="helloblok">
			<div class="hi">
				Добро пожаловать в планировщик!
			</div>
			<div class="osnovntext">
				Укажите все имеющиеся параметры и получите выгодный <br>
				маршрут по путешествию в питере.
			</div>
		</div>
		<div class="mini">
			<img src="logos/timer.png" width=24px heigth=24px>
			<div class="map">
				<img src="logos/map.png" width=170px heigth=170px>
			</div>
			<div class="timeword">
				Время
			</div>
			<div class="time">
				21:20
			</div>
			<div class="location">
				Локация <br>
				Санкт - петербург
			</div>
		</div>
		<div class="dataset">
			<div class="youmon">
				<div class="port">
					<img src="logos/moneys.png" width=100px heigth=100px>
				</div>
				<div class="money">
					Введите бюджет на отдых<br><br>
					Ваши средства -
				</div>
				<input type="text" class="getmoney" placeholder="Число :">
			</div>
			<div class="palka">
			</div>
			<div class="youtran">
				<div class="tran">
					<img src="logos/transport.png" width=100px heigth=100px>
				</div>
				<div class="transport">
					Выберите транспорт<br><br>
					<p>
						<input type="radio" name="drink" value="rad1"> Поезд
						<input type="radio" name="drink" value="rad2"> Самолет
					</p>
				</div>
			</div>
			<div class="palka1">
			</div>
			<div class="youday">
				<div class="dayl">
					<img src="logos/day.png" width=100px heigth=100px>
				</div>
				<div class="money">
					Введите бюджет на отдых<br><br>
					Ваши средства -
				</div>
				<input type="text" class="getday" placeholder="Число :">
			</div>
		</div>
		<div class="hotel">
			<div class="namehost">
				Отели и хостелы
			</div>
			<div class="bed">
				<img src="logos/bed.png" width=24px heigth=24px>
			</div>
			<div class="hotelthis">
				Hotel name by Rikardo Milas
			</div>
			<hr>
			<div class="kolvoday">
				Колличество дней :
			</div>
			<div class="kolvo">
				5
			</div>
			<div class="price">
				Цена отеля :
			</div>
			<div class="kolvoprice">
				5 000
			</div>
		</div>
		<div class="ticket">
			<div class="tickets">
				Билеты
			</div>
			<div class="tic">
				<img src="logos/tick.png" width=24px heigth=24px>
			</div>
			<div class="where">
				Орел - Санкт - Петербург
			</div>
			<div class="rzd">
				<img src="logos/rzd.png" width=50px heigth=50px>
			</div>
			<div class="whereot">
				Орловский ж/д
			</div>
			<div class="wheretuda">
				Санкт - Петербургский ж/д
			</div>
		</div>
		<div class="musems">
			<div class="namemusems">
				Достопримечательности
			</div>
			<div class="mus">
				<img src="logos/musem.png" width=24px heigth=24px>
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
			<div class="place">
				Эрмитаж
			</div>
		</div>
		<div class="dayer">
			q
		</div>
		<div class="marsh">
			q
		</div>
	</div>

	<div id="chartContainer" class="graph"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>