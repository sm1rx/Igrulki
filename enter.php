<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){

$servername = "localhost";
$database = "register-bd";
$username = "root";
$password = "";

$Login=filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$Password=filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

$Password = md5($Password);

$mysql = new mysqli($servername, $username, $password, $database);
$result = $mysql->query("SELECT * FROM `users` WHERE `Login` = '$Login' AND `Password` = '$Password'");

$user = $result->fetch_assoc(); 
if(count($user) == 0){
	echo "Пользователь не найден";
	exit();
}
setcookie('user', $user['Login'], time() + 3600, "/");
header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/regstyle.css">
</head>
<body>
	<div class="container mt-3">
	<h1> Автоизация <h1>
		<form action="" method="post"> 
			<input type="text" class="form-control" name ="login" id ="login" placeholder="ведите логин"><br>
			<input type="password" class="form-control" name ="pass" id ="pass" placeholder="ведите пароль"><br>
			<button class="btn btn-success" type="submit"> Авторизоваться </button>
		</form>
	</div>
</body>
</html>