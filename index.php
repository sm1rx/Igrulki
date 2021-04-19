

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&family=Indie+Flower&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/d67b372aba.js"></script>
	<title>Play</title>
</head>
<body>
	<header class="header">
		<div class="container">
			<nav class="nav1">
				<?php
					if($_COOKIE['user'] != ''):
				?>
				<a class="nav__link2" href="/basket.php"> Корзина </a>
				<?php else:?>
				<a class="nav__link1"> </a>
				<?php endif;?>
				<a class="nav__link2" href="#">Установить Play.ru</a>
			</nav>
		<?php
			if($_COOKIE['user'] == ''):
		?>
		<div class="nav2">
			<a class="nav__link1"> </a>
			<nav class="nav2__link2">
				<a  class="nav__link" href="/enter.php">Вход |</a>
				<a  class="nav__link" href="/register.php"> Регистрация</a>
			</nav>	
		</div>
		<?php else:?>
		<div class="nav2">
			<a class="nav__link1"> </a>
			<nav class="nav2__link2">
				<a  class="nav__link" href="/exit.php"> Выйти</a>
			</nav>	
		</div>
		<?php endif;?>
		<div class="header__inner">
			<div class="header__logo">Play</div>
			<nav class="nav">
				<a class="nav__link" href="#">Магазин |</a>
				<a class="nav__link" href="#"> Сообщество |</a>
				<a class="nav__link" href="#"> О Play.ru</a>
			</nav>	
		</div>
		<nav class="dws-menu">
			<ul>
				<li><a href="#"><i class="fa fa-gamepad" aria-hidden="true"></i>Игры</a>
					<ul>
						<li><a href="/products/free.php">Бесплатные</a></li>
						<li><a href="/products/VR.php">VR</a></li>
						<li><a href="/products/DEMO.php">DEMO</a></li>
						<li><a href="#">По платформам</a>
							<ul> 
								<li><a href="/products/Platforms/Linux.php">Linux</a></li>
								<li><a href="/products/Platforms/MacOS.php">macOS</a></li>
							</ul>
						</li>
						<li><a href="#">По жанрам</a>
							<ul> 
								<li><a href="/products/Genre/Race.php">Гонки</a></li>
								<li><a href="/products/Genre/Indie.php">Инди</a></li>
								<li><a href="/products/Genre/Casual.php">Казуал</a></li>
								<li><a href="/products/Genre/MMO.php">ММО</a></li>
								<li><a href="/products/Genre/Simulator.php">Симулятор</a></li>
								<li><a href="/products/Genre/Sport.php">Спорт</a></li>
								<li><a href="/products/Genre/Strategy.php">Стратегия</a></li>
								<li><a href="/products/Genre/Action.php">Экшн</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="#"><i class="fa fa-wpforms" aria-hidden="true"></i>Программы</a></li>
				<li><a href="#"><i class="fa fa-mobile" aria-hidden="true"></i>Устройства</a></li>
				<li><a href="#"><i class="fa fa-medkit" aria-hidden="true"></i>Поддержка</a></li>
			</ul>
		</nav>
		</div>
	</header>
	<div class="intro">
		<div class="container"></div>
	<div class="tanki">	
		<div class="container">
			<div class="tanki__image">
				<img src="pictures/tanchiki.png" width="612" height="512" alt="">
			</div>
		</div>
	</div>	

	<footer class="footer">
		<div class="conteiner">
			<nav class="nav3">
				<a class="nav__link3" href="#">Политика конфидециальности|</a>
				<a class="nav__link3" href="#">Правовая информация|</a>
				<a class="nav__link3" href="#">Возват</a>
			</nav>
			<nav class="nav3">
				<a class="nav__link3" href="#">Вакансии|</a>
				<a class="nav__link3" href="#">vk|</a>
				<a class="nav__link3">artm-porjad@mail.ru</a>
			</nav>
		</div>
	</footer>
</body>
</html>