<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="./style/style.css">
		<title>Tienda - Inicio de Sesion</title>
	</head>
	<body>	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">E-Shop</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<!-- <a class="nav-item nav-link" href="./index.php">Inicio</a>
					<a class="nav-item nav-link" href="./view/shopping.php">Mi Carro</a> -->
				</div>
			</div>
		</nav>
		<div class="container-flow breadcrumb">
			<div class="row">
				<div class="col-xl-12"><h3>Inicio de Sesion</h3></div>			
			</div>
		</div>
	</header>
	<main>
		<section class="container">
			<form method="POST" action="./controller/inicio_sesion.php">
				<div class="form-group">
					<label>Usuario</label>
					<input type="text" class="form-control" name="user" aria-describedby="emailHelp" placeholder="Usuario">
				</div>
				<div class="form-group">
					<label>Contraseña</label>
					<input type="password" class="form-control" name="pass" placeholder="Contraseña">
				</div>
				<div class="form-group">
					<label>E-Mail</label>
					<input type="mail" class="form-control" name="mail" placeholder="Correo Electronico">
				</div>
				<button type="submit" class="btn btn-primary">Iniciar Sesion</button>
			</form>
		</section>
	</main>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
</html>