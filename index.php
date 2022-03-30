<!DOCTYPE html>
<html>
<head>
	<title>Ямщицкие подворья</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost&family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
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
			        </ul>
			    </div>
		    </div>
		</div>
	</nav>
	<!-- Карта -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-12">
				<h1 class="font-mnt"><b>История ямщиков у тебя в кармане</b></h1>
				<p class="font-jt">Интерактивная карта и много возможностей для изучения жизни и истории ямщиков</p>
			</div>
		</div>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
			    <div class="carousel-item active">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Some representative placeholder content for the first slide.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Some representative placeholder content for the second slide.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Some representative placeholder content for the third slide.</p>
			      </div>
			    </div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="visually-hidden">Next</span>
			</button>
		</div>

		<div class="row mt-5">
			<h1 class="font-mnt"><b>Карта</b></h1>
			<p class="font-jt">Узнайте где и когда</p>
		</div>
	</div>
	<div class="container-fluid">
		<a href="map.php">
			<div class="row">
				<img src="img/mapimg.png">
			</div>
		</a>
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