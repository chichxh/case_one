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
    <style type="text/css">
    	.btn-circ{
			border-radius: 100px;
			border: 0px;
			background-color: #3C3C3C;
			color: #fff;
			padding: 10px 18px;
		}
    </style>
</head>
<body>
	<?php require "header.php"; ?>
	
	<div class="container">
		<div class="row">
			<h1>Путешествуй с пользой</h1>
			<p class="font-jt">Узнавай больше о своем крае и городе вместе с нами</p>
		</div>
		<div class="row	my-4">
			<div class="col-6 text-center">
				<img src="img/t1.png" width="75%">
			</div>
			<div class="col-6 text-center">
				<img src="img/t2.png" width="75%">
			</div>
		</div>
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 text-center">
				<img src="img/t3.png" width="100%">
			</div>
			<div class="col-2"></div>
		</div>
	</div>
	<hr>
	<div class="container">
		<div class="row">
			<h1><b>Пакеты</b></h1>
		</div>	
		<div class="row">
			<div class="col-6">
				<p>20.09.22</p>
				<div class="d-flex justify-content-around"><h3>Покровск</h3><img src="img/strR.png"></div>
				<p>Посетите памятные места, музеи и наше подворье.</p>
				<button class="btn btn-circ"><img src="img/arrow.png"></button>
			</div>
			<div class="col-6 px-0 text-center">
				<img src="img/t4.png" class="mx-img">
			</div>
		</div>	
		<div class="row">
			<div class="col-6 px-0 text-center">
				<img src="img/t5.png" class="mx-img">
			</div>
			<div class="col-6 text-end">
				<p>20.09.22</p>
				<div class="d-flex justify-content-around"><img src="img/strL.png"><h3>По улусу</h3></div>
				<p>Тур-треки по улусам все еще разрабатываются</p>
				<button class="btn btn-circ"><img src="img/arrow.png"></button>
			</div>
		</div>	
	</div>
	<hr>
	<div class="container">
		<div class="row my-5">
			<h1><b>Обратная связь</b></h1>
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