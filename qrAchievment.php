<?php 
require 'connect.php';
$conn = new mysqli($host, $user, $password, $database);

session_start();
$id = $_SESSION['id'];
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];
$achId = $_SESSION['achId'];

$achIdArray = explode(" ", $achId);

if(isset($_POST['qr'])) {
	$qrCode = $_POST['qr'];
    $query = mysqli_query($link,"SELECT * FROM achievments WHERE qr = '$qrCode'");
    $data = mysqli_fetch_assoc($query);
    $achievmentId = (int)$data['id'];
    $achievmentName = $data['achievment'];

    // $query = mysqli_query($link,"SELECT * FROM users WHERE id = '$id");
    // $data = mysqli_fetch_assoc($query);
    // $achId = [];
    $achIdArray[] = $achievmentId;

	$query = "UPDATE users UPDATE achId = $achIdArray WHERE id = '$id";
	$res = mysqli_query($link, $query);

    if ($conn->query($query) === TRUE) {
	    echo "ok";
	} else {
	    echo "Ошибка: " . $sql . "<br>" . $conn->error;
	}
}
echo $achievmentId;
    echo $achievmentName;
?>