<?php
require 'connect.php';

session_start();
$id = (int)$_SESSION['id'];
$name = $_SESSION['name'];
$surname = $_SESSION['surname'];
$email = $_SESSION['email'];

$query = mysqli_query($link,"SELECT * FROM users WHERE id = $id");
$data = mysqli_fetch_assoc($query);
$achId = $data['achId'];

$query = mysqli_query($link,"SELECT * FROM achievments");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Личный кабинет</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost&family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="qr-scanner.umd.min.js"></script>
</head>
<body>
	<div class="wrap">
	    <div>
			<video style="display: none" id="videoElem"></video>
		    <div id="canvas"></div> <br>
		    <p>Поднесите свое устройство с QR-кодом к камере</p>
		    <br>
		</div>

	    <!-- post requset -->
	    <div class="ms">
	    	<form>
			    <input type="text" name="qr" class="input">
			    <!-- <input type="submit" id="send_button" formmethod="post" disabled="true" class="btn-spec"> -->
			    <button type="submit" id="send_button" formmethod="post" disabled="true" class="btn-spec">Подтвердить код</button>
			</form>
			<button id="start_button" disabled="true" onclick="startScan()" class="btn-spec">Повторное сканирование</button>
	    </div>
	</div>

	<div class="container">
		<div class="row">
			<p>Сделаны ачивки: <?php echo $achId; ?></p>
		</div>
		<div class="row">
			<?php while ($row = mysqli_fetch_array($query)): ?>
				<p><?= $row['id']; ?> <?= $row['achievment']; ?></p>
				<br>
			<?php endwhile; ?>
		</div>
	</div>

	<script>
		let response_text;
		let videoElem = document.getElementById("videoElem");
		let startButton = document.getElementById("start_button");
		let sendButton = document.getElementById("send_button");
		const form = document.querySelector('form');
		const qrScanner = new QrScanner(videoElem, result => readyRequest(result));
		qrScanner.start();

		// for debugging
    	window.scanner = qrScanner;

    	let mcanvas = document.getElementById("canvas");
    	canvas.parentNode.insertBefore(scanner.$canvas, canvas.nextSibling);
    	canvas.innerHTML = ""
    	//qrScanner.$canvas.style.display = 'block';


		function readyRequest(result) {
			qrScanner.stop();
			startButton.disabled = false;
			let user_id = result;
			console.log('decoded qr code:', user_id)
			form.elements.qr.value = user_id;
			sendButton.disabled = false;
			user_id = null;
		}

		function startScan() {
			qrScanner.start();
		}

		//Requset to php file
		form.addEventListener('submit', evt => {
		    evt.preventDefault();
		    fetch('qrAchievment.php', {
		        method: 'POST',
		        body: new FormData(form)
		    }).then(function(response){
		    response.text().then(function(text) { checkResponse(text); })
		    }).catch(function(error){
		    console.log(error);
		    });
		})

		//Проверка ответа от сервер
		function checkResponse(resp) {
			console.log(resp);
			if (resp == "ok") {
				alert("Вы выполнили достижение!");
				document.location.reload();
			}
			else {
				alert("Ошибка в ответе от сервера");
			}
		}
	</script>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>