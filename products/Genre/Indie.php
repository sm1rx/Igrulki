<?php

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

$section1 = "Genre";
$section2 = "Indie";

$mysql = new mysqli($servername, $username, $password, $database);
$result = $mysql->query("SELECT * FROM products_section_2 WHERE Section1 = '$section1' AND Section2 = '$section2';");




?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Бесплатные игры</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/sectionstyle.css">
</head>
<body>
	<div class="container mt-3">
	<h1> Бесплатные игры <h1>
		<table>
			<?php 
				while ($row = $result->fetch_assoc()) {					
					echo "<tr><td>$row[Name]</td><td><img src='$row[Link]'/></td><td>Цена - $row[Price]</td><td><a class='link' href='/basket.php?addid=$row[id]'> В корзину </a> </td></tr>";
				}
			?>
		</table>
	</div>
</body>
</html>