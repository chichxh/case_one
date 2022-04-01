<!DOCTYPE html>
<html>
<head>
	<title>Лошадиная ферма</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost&family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="uid.min.css">
    <script type="text/javascript" src="uid.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php require "header.php"; ?>
	<div class="container mb-5">
		<div class="row">
			<h1><b>Наше тематичсекое кафе</b></h1>
			<p class="font-jt">Орджоникидзе 53</p>
		</div>
		<div class="row mt-5 justify-content-center">
			<div class="col-4 text-end">
				<img src="img/с1.png" width="75%">
			</div>
			<div class="col-4 text-start align-middle">
				<h3>Еда</h3>
				<p class="font-jt">Меню состоит из традиционных ямщицких блюд. Как думаете насколько сохранился оригинальный вкус? Приходите и проверьте!</p>
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-4 text-end align-middle">
				<h3>Стиль</h3>
				<p class="font-jt">Аутентичный стиль дает незабываемые впечатления от приема пищи.</p>
			</div>
			<div class="col-4 text-start">
				<img src="img/с2.png" width="75%">
			</div>
		</div>
		<div class="row mt-3 justify-content-center">
			<div class="col-4 text-end">
				<img src="img/с3.png" width="75%">
			</div>
			<div class="col-4 text-start">
				<h3 class="d-flex align-middle">Про кафе</h3>
				<p class="font-jt">Кафе открылось совсем недавно и уже имеет популярность. Сохраняя культуру мы делимся ею с Вами! Давайте вместе сохраним нашу историю.</p>
			</div>
		</div>
		<div class="row my-5">
			<h1><b>Аренда кафе</b></h1>
			<form>
				<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">ФИО</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Электронный адрес</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<div class="mb-3">
				    <label for="exampleInputEmail1" class="form-label">Вопрос</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				</div>
				<button type="submit" class="btn">Отправить</button>
			</form>
		</div>
	</div>


	<?php require "footer.php"; ?>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>