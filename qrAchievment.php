<?php 
require 'connect.php';
$conn = new mysqli($host, $user, $password, $database);

session_start();
$id = $_SESSION['id'];
$query = mysqli_query($link,"SELECT * FROM users WHERE id = $id");
$data = mysqli_fetch_assoc($query);
$achId = $data['achId'];
$achIdArray = explode(",", $achId);

if(isset($_POST['qr'])) {
	$qrCode = $_POST['qr'];
    $query = mysqli_query($link,"SELECT * FROM achievments WHERE qr = '$qrCode'");
    $data = mysqli_fetch_assoc($query);
    $achievmentId = (int)$data['id'];
    $achievmentName = $data['achievment'];

    $achIdArray[] = $achievmentId;
    $achId = implode(",", $achIdArray);

	$query = "UPDATE users SET achId = '$achId' WHERE id = $id";
	$res = mysqli_query($link, $query);

    if ($conn->query($query) === TRUE) {
	    echo "ok";
	} else {
	    echo "Ошибка: " . $sql . "<br>" . $conn->error;
	}
}
?>