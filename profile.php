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
	include 'db.php';
	$link = connect();
	$userId = $_REQUEST['user'];
	$query = "SELECT * from user where user.id = $userId";
	$res = $link->query($query);
	while ($row = $res->fetch_assoc()) {
		$name = $row['name'];
		$surname = $row['surname'];
		$fathername = $row['fathername'];
	}
	?>
	<div id="mainpage">
		<div class="profile">
			<div class="circle">

			</div>
			<!-- <div class="plus">
				<div class="input__wrapper">
					<input name="file" type="file" name="file" id="input__file" class="input input__file" multiple>
					<label for="input__file" class="input__file-button">
						<span class="input__file-icon-wrapper"><img class="input__file-icon" src="logos/day.png" alt="Выбрать файл" width="25"></span>
					</label>
				</div>
			</div> -->
			<div class="fio">
				<? echo ("$name $surname"); ?>
			</div>
		</div>
		<div class="check">
			<?
			// include 'actions/getMyTours.php';
			// while ($row = $res->fetch_assoc()) {
			// 	$name = $row['name'];
			// 	$surname = $row['surname'];
			// 	$parse->get_tpl('temp/tourCard.tpl'); //Файл который мы будем парсить
			// 	$FI = $surname . " " . $name;
			// 	$parse->set_tpl('{FI}', "$FI");

			// 	$email = $row['email'];
			// 	$parse->set_tpl('{EMAIL}', "$email");

			// 	$hotelName = $row['hotel'];
			// 	$parse->set_tpl('{HOTELNAME}', "$hotelName");

			// 	$place = $row['attractions'];
			// 	$parse->set_tpl('{PLACE}', "$place");

			// 	$ticket = $row['ticket'];
			// 	$parse->set_tpl('{TICKET}', "$ticket");

			// 	$photo = $row['photo'];
			// 	$parse->set_tpl('{PHOTO}', $photo);

			// 	$parse->tpl_parse(); //Парсим

			// 	echo ($parse->template);
			// }
			?>
			<img src="img/logos/card.png" alt="" width=335px height="=100px" style="margin-top: 2%;">
		</div>
		<div class="place">
			<div class="btn">
				Добавить человека
			</div>
			<img src="img/logos/ludi.png" alt="" width=350px height="=24px" style="margin-left: -60%; margin-bottom: -42%">
		</div>
		<div class="game">
			<?
			include 'actions/getLikedTours.php';
			while ($row = $res->fetch_assoc()) {
				$name = $row['name'];
				$surname = $row['surname'];
				$parse->get_tpl('temp/tourCard.tpl'); //Файл который мы будем парсить
				$FI = $surname . " " . $name;
				$parse->set_tpl('{FI}', "$FI");

				$email = $row['email'];
				$parse->set_tpl('{EMAIL}', "$email");

				$hotelName = $row['hotel'];
				$parse->set_tpl('{HOTELNAME}', "$hotelName");

				$place = $row['attractions'];
				$parse->set_tpl('{PLACE}', "$place");

				$ticket = $row['ticket'];
				$parse->set_tpl('{TICKET}', "$ticket");

				$parse->tpl_parse(); //Парсим

				echo ($parse->template);
			}
			?>
		</div>
	</div>


	<div id="chartContainer" class="graph"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>