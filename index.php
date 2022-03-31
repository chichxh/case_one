<!DOCTYPE html>
<html>
<head>
	<title>Ямщицкие подворья</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost&family=Montserrat+Alternates&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="uid.min.css">
    <script type="text/javascript" src="uid.min.js"></script>
</head>
<body>
	<!-- Хидер -->
	<nav class="navbar navbar-light navbar-expand-lg bg-light font-mnt">
		<div class="container">
		    <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="120"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
		        <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
			    <div class="offcanvas-header">
			        <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="img/logo.png" width="120"></h5>
			        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			    </div>
			    <div class="offcanvas-body">
			        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
				        <li class="nav-item">
				            <a class="nav-link active" aria-current="page" href="#">Главная</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" href="#">Новости</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" href="#">Мерч</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" href="#">Музеи</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" href="#">Контакты</a>
				        </li>
				        <li class="nav-item">
				            <a class="nav-link" href="login.php">Войти</a>
				        </li>
			        </ul>
			    </div>
		    </div>
		</div>
	</nav>
	<!-- Карта -->
	<div class="container-fluid mt-5 bg">
		<div class="row">
			<div class="col-10">
				<h1 class="font-mnt"><b>История ямщиков Хангаласского района</b> прямо у тебя в кармане</h1>
			</div>
			<div class="col-5">
				<button class="btn">Кто такие ямщики?</button>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row mt-5">
			<h1 class="font-mnt"><b>Карта</b></h1>
			<p class="font-jt">Узнайте где и когда</p>
		</div>
	</div>
	<div class="container-fluid">
		<!-- <a href="map.php"> -->
			<div class="row">
				<div class="overflow">
					<img src="img/map.png">
				</div>
			</div>
		<!-- </a> -->
	</div>
	<!-- Новости -->
	<div class="container">
		<div class="row">
			<h1 class="font-mnt"><b>Новости</b></h1>
			<p class="font-jt">Будь в курсе всех событий</p>
		</div>
		<div class="row">
			<div class="slider">
		        <div class="slider__wrapper">
		        	<div class="slider__items">
		            	<div class="slider__item">
		            		<div class="row">
		            			<div class="col-5">
		            				<img src="img/news1.png">
		            			</div>
		            			<div class="col-7">
		            				<p>20.09.22</p>
		            				<h2><b>Новое меню кафе</b></h2>
		            				<p>Теперь в нашем кафе вы сможете попробывать ямщиские блюда</p>
		            			</div>
		            		</div>
		            		<div class="row">
		            			<div class="col-7">
		            				<p>20.09.22</p>
		            				<h2><b>Новое меню кафе</b></h2>
		            				<p>Теперь в нашем кафе вы сможете попробывать ямщиские блюда</p>
		            			</div>
		            			<div class="col-5">
		            				<img src="img/news1.png">
		            			</div>
		            		</div>
		          		</div>
			          	<div class="slider__item">
		            		<div class="row">
		            			<div class="col-5">
		            				<img src="img/news1.png">
		            			</div>
		            			<div class="col-7">
		            				<p>20.09.22</p>
		            				<h2><b>Новое меню кафе</b></h2>
		            				<p>Теперь в нашем кафе вы сможете попробывать ямщиские блюда</p>
		            			</div>
		            		</div>
		            		<div class="row">
		            			
		            		</div>
		          		</div>
			        </div>
		        </div>
		    </div>		
		</div>
	</div>

	<!-- Услуги -->
	<div class="container mt-5">
		<div class="row">
			<h1 class="font-mnt"><b>Услуги</b></h1>
			<p class="font-jt">Наши возможности</p>
		</div>
		<div class="row justify-content-between">
			<div class="col-4">
				<div class="card">
					<div class="card-body">
					    <h5 class="card-title">Лошадиная ферма</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-body">
					    <h5 class="card-title">Туртрекер</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn">Узнать больше</a>
					</div>
				</div>
			</div>
			<div class="col-4">
				<div class="card">
					<div class="card-body">
					    <h5 class="card-title">Аренда кафе</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn">Узнать больше</a>
					</div>
				</div>
			</div>
		</div>
	</div>





	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>