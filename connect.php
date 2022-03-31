<?php 
$database = 'caseone';
$user = 'root';
$password = 'root';
$host = 'localhost';


$mysqli = new mysqli($host, $user, $password, $database);

$link = mysqli_connect($host, $user, $password, $database);
mysqli_set_charset($link, "utf8");

if ($link == false){
	print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
 ?>