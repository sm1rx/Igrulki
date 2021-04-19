<?php

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";


$mysql = new mysqli($servername, $username, $password, $database);

$ID = $_GET['addid'];



if (is_null($ID)){
	echo "";
}else{
	$mysql ->query("INSERT INTO basket (idproducts) VALUES ('$ID')");
	header('Location: /basket.php');

}


$result = $mysql->query("SELECT a.Name, a.Link, a.Price FROM products_section_2 a, basket b WHERE a.id = b.idproducts");


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
	<h1> Корзина <h1>
		<table>
			<?php
				while ($row = $result->fetch_assoc()) {	
					echo "<tr><td>$row[Name]</td><td><img src='$row[Link]'/></td><td>Цена - $row[Price]</td></tr>";
				}
			?>
		</table>
</body>
</html>