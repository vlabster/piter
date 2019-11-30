<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/sideProf.css">
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
		<div class="profile">
			<div class="circle">

			</div>
			<div class="plus">
				<div class="input__wrapper">
					<input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
					<label for="input__file" class="input__file-button">
						<span class="input__file-icon-wrapper"><img class="input__file-icon" src="logos/day.png"
								alt="Выбрать файл" width="25"></span>
					</label>
				</div>
			</div>
			<div class="fio">
				Марк Серёгин
			</div>
		</div>
		<div class="check">
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
		</div>
		<div class="place">
			<div class="btn">
				Добавить человека
			</div>
			<div class="add">
				Леонид
			</div>
			<div class="add1">
				Стив
			</div>
			<div class="add2">
				Рикардо
			</div>
			<div class="add3">
				Васильевич
			</div>
		</div>
		<div class="game">
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
			ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>ффффффффффффффффффф
			<Br>фффффффффффффффффффффф<br>
		</div>
	</div>


	<div id="chartContainer" class="graph"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>