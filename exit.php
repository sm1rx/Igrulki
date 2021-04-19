<?php 
	setcookie('user', $user['Login'], time() - 3600, "/");
	$servername = "localhost";
	$database = "register-bd";
	$username = "root";
	$password = "";


	$mysql = new mysqli($servername, $username, $password, $database);
	$mysql ->query("DELETE FROM basket;");
	header('Location: /');
?>