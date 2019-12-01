<!DOCTYPE html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/sideTop.css">
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
				Пропитанный голосами муз, воздушный, <br>покойно возлежащий на берегах Невы<br> город Санкт-Петербург создан для того,<br> чтобы кружить головы туристам непомерным<br> количеством свидетельств непростой,<br> но богатой истории страны. <br>Его стройный облик, гулкая тишина<br> музейных залов, степенный<br> ритм жизни — все располагает <br>к обстоятельному погружению наследие.
			</div>

			<div class="palka">
			</div>
			<div class="slider">
				<div class="hotel">
					<div class="hotelname">
						Отель
						<img src="img/logos/bed.png" width=20px heigth=20px>
					</div>
					<img src="img/logos/kart.png" alt="" class="kart" width=24px heigth=24px>
					<div class="hotelthis">
						Квартиер казимякина
					</div>
					<div class="kach">
						Качество
					</div>
					<div class="price">
						Цена
					</div>
					<div class="kachthis">
						10/10
					</div>
					<div class="pricethis">
						870 руб
					</div>
				</div>
				<div class="mus">
					<div class="musname">
						Музеи
						<img src="img/logos/musem.png" width=20px heigth=20px>
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Дворец Петра I
					</div>
					<div class="thismus">
						Дворец Елизаветы Великой
					</div>
					<div class="thismus">
						Кунсткамера
					</div>
					<div class="thismus">
						Музей Эрарта
					</div>
					<div class="thismus">
						Дворцовая Площадь
					</div>
					<div class="thismus">
						Анчиков мост
					</div>

				</div>
				<div class="trans">
					<div class="transname">
						Транспорт
						<img src="img/logos/tick.png" width=20px heigth=20px>
						<div class="ticket">


							<div class="where">
								Орел - Санкт - Петербург
							</div>
							<div class="rzd">
								<img src="img/logos/rzd.png" width=50px heigth=50px>
							</div>
							<div class="whereot">
								Орловский ж/д
							</div>
							<div class="wheretuda">
								Санкт - Петербургский ж/д
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="palka">
			</div>
			<div class="blok">
				<div class="ava">
					<img src="img/logos/t.png" width=24px heigth=24px>
				</div>
				<div class="fio">
					Серёгин Марк
				</div>
			</div>
			<hr>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/r.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Серёгин Марк
					<div class="kom">
						Мне нрав:)))))
					</div>
				</div>
			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/e.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Ленька Якубович
					<div class="kom">
						Крутите барабан
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/w.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Рикардо Милас
					<div class="kom">
						Го танцевать
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/q.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Канчита Вурс
					<div class="kom">
						А я евро выйграла:)
					</div>
				</div>
			</div>
			<hr>
			<input type="text" class="getkom" placeholder="Введите комментарий :">
		</div>
		<div class="helloblok">

			<div class="hi">
				Пропитанный голосами муз, воздушный, <br>покойно возлежащий на берегах Невы<br> город Санкт-Петербург создан для того,<br> чтобы кружить головы туристам непомерным<br> количеством свидетельств непростой,<br> но богатой истории страны. <br>Его стройный облик, гулкая тишина<br> музейных залов, степенный<br> ритм жизни — все располагает <br>к обстоятельному погружению наследие.
			</div>

			<div class="palka">
			</div>
			<div class="slider">
				<div class="hotel">
					<div class="hotelname">
						Отель
						<img src="img/logos/bed.png" width=20px heigth=20px>
					</div>
					<img src="img/logos/kart.png" alt="" class="kart" width=24px heigth=24px>
					<div class="hotelthis">
						Квартиер казимякина
					</div>
					<div class="kach">
						Качество
					</div>
					<div class="price">
						Цена
					</div>
					<div class="kachthis">
						10/10
					</div>
					<div class="pricethis">
						870 руб
					</div>
				</div>
				<div class="mus">
					<div class="musname">
						Музеи
						<img src="img/logos/musem.png" width=20px heigth=20px>
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>

				</div>
				<div class="trans">
					<div class="transname">
						Транспорт
						<img src="img/logos/tick.png" width=20px heigth=20px>
						<div class="ticket">


							<div class="where">
								Орел - Санкт - Петербург
							</div>
							<div class="rzd">
								<img src="img/logos/rzd.png" width=50px heigth=50px>
							</div>
							<div class="whereot">
								Орловский ж/д
							</div>
							<div class="wheretuda">
								Санкт - Петербургский ж/д
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="palka">
			</div>
			<div class="blok">
				<div class="ava">
					<img src="img/logos/t.png" width=24px heigth=24px>
				</div>
				<div class="fio">
					Серёгин Марк
				</div>
			</div>
			<hr>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/r.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Серёгин Марк
					<div class="kom">
						Мне нрав:)))))
					</div>
				</div>
			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/e.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Ленька Якубович
					<div class="kom">
						Крутите барабан
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/w.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Рикардо Милас
					<div class="kom">
						Го танцевать
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/q.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Канчита Вурс
					<div class="kom">
						А я евро выйграла:)
					</div>
				</div>
			</div>
			<hr>
			<input type="text" class="getkom" placeholder="Введите комментарий :">
		</div>
		<div class="helloblok">

			<div class="hi">
				Пропитанный голосами муз, воздушный, <br>покойно возлежащий на берегах Невы<br> город Санкт-Петербург создан для того,<br> чтобы кружить головы туристам непомерным<br> количеством свидетельств непростой,<br> но богатой истории страны. <br>Его стройный облик, гулкая тишина<br> музейных залов, степенный<br> ритм жизни — все располагает <br>к обстоятельному погружению наследие.
			</div>

			<div class="palka">
			</div>
			<div class="slider">
				<div class="hotel">
					<div class="hotelname">
						Отель
						<img src="img/logos/bed.png" width=20px heigth=20px>
					</div>
					<img src="img/logos/kart.png" alt="" class="kart" width=24px heigth=24px>
					<div class="hotelthis">
						Квартиер казимякина
					</div>
					<div class="kach">
						Качество
					</div>
					<div class="price">
						Цена
					</div>
					<div class="kachthis">
						10/10
					</div>
					<div class="pricethis">
						870 руб
					</div>
				</div>
				<div class="mus">
					<div class="musname">
						Музеи
						<img src="img/logos/musem.png" width=20px heigth=20px>
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>

				</div>
				<div class="trans">
					<div class="transname">
						Транспорт
						<img src="img/logos/tick.png" width=20px heigth=20px>
						<div class="ticket">


							<div class="where">
								Орел - Санкт - Петербург
							</div>
							<div class="rzd">
								<img src="img/logos/rzd.png" width=50px heigth=50px>
							</div>
							<div class="whereot">
								Орловский ж/д
							</div>
							<div class="wheretuda">
								Санкт - Петербургский ж/д
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="palka">
			</div>
			<div class="blok">
				<div class="ava">
					<img src="img/logos/t.png" width=24px heigth=24px>
				</div>
				<div class="fio">
					Серёгин Марк
				</div>
			</div>
			<hr>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/r.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Серёгин Марк
					<div class="kom">
						Мне нрав:)))))
					</div>
				</div>
			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/e.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Ленька Якубович
					<div class="kom">
						Крутите барабан
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/w.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Рикардо Милас
					<div class="kom">
						Го танцевать
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/q.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Канчита Вурс
					<div class="kom">
						А я евро выйграла:)
					</div>
				</div>
			</div>
			<hr>
			<input type="text" class="getkom" placeholder="Введите комментарий :">
		</div>
		<div class="helloblok">

			<div class="hi">
				Пропитанный голосами муз, воздушный, <br>покойно возлежащий на берегах Невы<br> город Санкт-Петербург создан для того,<br> чтобы кружить головы туристам непомерным<br> количеством свидетельств непростой,<br> но богатой истории страны. <br>Его стройный облик, гулкая тишина<br> музейных залов, степенный<br> ритм жизни — все располагает <br>к обстоятельному погружению наследие.
			</div>

			<div class="palka">
			</div>
			<div class="slider">
				<div class="hotel">
					<div class="hotelname">
						Отель
						<img src="img/logos/bed.png" width=20px heigth=20px>
					</div>
					<img src="img/logos/kart.png" alt="" class="kart" width=24px heigth=24px>
					<div class="hotelthis">
						Квартиер казимякина
					</div>
					<div class="kach">
						Качество
					</div>
					<div class="price">
						Цена
					</div>
					<div class="kachthis">
						10/10
					</div>
					<div class="pricethis">
						870 руб
					</div>
				</div>
				<div class="mus">
					<div class="musname">
						Музеи
						<img src="img/logos/musem.png" width=20px heigth=20px>
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>
					<div class="thismus">
						Эрмитаж
					</div>

				</div>
				<div class="trans">
					<div class="transname">
						Транспорт
						<img src="img/logos/tick.png" width=20px heigth=20px>
						<div class="ticket">


							<div class="where">
								Орел - Санкт - Петербург
							</div>
							<div class="rzd">
								<img src="img/logos/rzd.png" width=50px heigth=50px>
							</div>
							<div class="whereot">
								Орловский ж/д
							</div>
							<div class="wheretuda">
								Санкт - Петербургский ж/д
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="palka">
			</div>
			<div class="blok">
				<div class="ava">
					<img src="img/logos/t.png" width=24px heigth=24px>
				</div>
				<div class="fio">
					Серёгин Марк
				</div>
			</div>
			<hr>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/r.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Серёгин Марк
					<div class="kom">
						Мне нрав:)))))
					</div>
				</div>
			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/e.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Ленька Якубович
					<div class="kom">
						Крутите барабан
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/w.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Рикардо Милас
					<div class="kom">
						Го танцевать
					</div>
				</div>

			</div>
			<div class="blokom">
				<div class="avaom">
					<img src="img/logos/q.png" width=24px heigth=24px>
				</div>
				<div class="fioom">
					Канчита Вурс
					<div class="kom">
						А я евро выйграла:)
					</div>
				</div>
			</div>
			<hr>
			<input type="text" class="getkom" placeholder="Введите комментарий :">
		</div>

	</div>

	<div id="chartContainer" class="graph"></div>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>