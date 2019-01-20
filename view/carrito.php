<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="../style/style.css">
		<title>Mi Carro</title>
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
                    <a class="nav-item nav-link" href="./shopping.php">Tienda</a>
					<a class="nav-item nav-link" href="../index.php">Cerrar Sesion</a>
				</div>
			</div>
		</nav>
		<div class="container-flow breadcrumb">
			<div class="row">
				<div class="col-xl-12"><h3>Carrito</h3></div>			
			</div>
		</div>
	</header>
	<main>
		<section class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio (€)</th>
                <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <form method="POST" action="../controller/finalizar_compra.php">
                <?php
                    require("../model/Conexion.php");
                    require("../model/Usuario.php");    

                    $conexion = new Conexion();

                    try {
                        $sql = "SELECT * FROM pedidos";
                        $res = $conexion->query($sql);
                    } catch (PDOException $e) {
                        echo 'Error de consulta' . $e->getMessage();
                        exit();
                    }

                    foreach ($res as $key => $value) {
                        echo "<tr>";
                        echo "<th scope='row'>$value[0]</th>";
                        echo "<input type='hidden' name='stock' value='$value[3]'></input>";
                        echo "<td>$value[1]</td>";
                        echo "<td>$value[2]</td>";
                        echo "<td><input name='cantidad' type='number' placeholder='Cantidad'></input></td>";
                        echo "</tr>";
                    }
                    $conexion = null;
                ?>
                
            </tbody>
            </table>
            <button type="submit" class="btn btn-primary">Comprar</button>
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