<?php 
// создание таблицы
// CREATE TABLE `logins` (
//   `id` int(11) NOT NULL AUTO_INCREMENT,
//   `Login` char(64) NOT NULL,
//   `Name` char(64) DEFAULT NULL,
//   `Password` char(64) NOT NULL,
//   PRIMARY KEY (`id`)
// ) ENGINE=InnoDB DEFAULT CHARSET=utf8


//ПОДКЛЮЧЕНИЕ К БАЗЕ ДАННЫХ

$succ = 1;

if ($_SERVER['REQUEST_METHOD'] == "POST"){

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

$Login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$Name=filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$Password=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);



if(mb_strlen($Login) < 3 || mb_strlen($Login) > 15){
	$succ=0;
	echo "Неправильный формат логина или пароля. 5>пароль>15,  3>логин>15.";
	exit();
}if(mb_strlen($Password) < 5 || mb_strlen($Password) > 15){
	$succ=0;
	echo "Неправильный формат логина или пароля. 5>пароль>15,  3>логин>15.";
	exit();
}

$Password = md5($Password);

$mysql = new mysqli($servername, $username, $password, $database);
$mysql ->query("INSERT INTO `users` (`Login`, `Name`, `Password`) VALUES ('$Login', '$Name', '$Password')");

$mysql->close();


if ($succ = 1){
	header('Location: /');
}else{
	echo "Неправильный формат логина или пароля. 5>пароль>15,  3>логин>15.";
}
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>форма регистрации</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/regstyle.css">
</head>
<body>
	<div class="container mt-3">
		<h1>Форма регистрации</h1>
		<form action="" method="post">
			<input type="text" class="form-control" name ="login" id ="login" placeholder="ведите логин"><br>
			<input type="text" class="form-control" name ="name" id ="name" placeholder="ведите имя"><br>
			<input type="password" class="form-control" name ="pass" id ="pass" placeholder="ведите пароль"><br>
			<button class="btn btn-success" type="submit"> Зарегистрировать </button>
		</form>
	</div>
</body>
</html>
