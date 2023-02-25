<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>APP MOVIES</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://kit.fontawesome.com/1fd3469d76.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="d-flex justify-content-center" > <h1>LOGO</h1> </div>
	<div class="container-fluid bg-ligth">
		<div class="container">
			<nav class="navbar navbar-expand-sm bg-light navbar-light">
				<div class="container-fluid">					
					<ul class="navbar-nav">		
						<?php if (isset($_GET["paginas"])): ?>
							<?php if ($_GET["paginas"] == "registro" ): ?>
								<li class="nav-item active"><a href="index.php?paginas=registro">REGISTRO</a></li>
							<?php else: ?>
								<li><a href="index.php?paginas=registro">REGISTRO</a></li>						
							<?php endif ?>					
						<?php endif ?>				

						<?php if (isset($_GET["paginas"])): ?>
							<?php if ($_GET["paginas"] == "ingreso" ): ?>
								<li class="active"><a href="index.php?paginas=ingreso">INGRESO</a></li>
							<?php else: ?>
								<li><a href="index.php?paginas=ingreso">INGRESO</a></li>						
							<?php endif ?>					
						<?php endif ?>

						<?php if (isset($_GET["paginas"])): ?>
							<?php if ($_GET["paginas"] == "inicio" ): ?>
								<li class="active"><a href="index.php?paginas=inicio">INICIO</a></li>
							<?php else: ?>
								<li><a href="index.php?paginas=inicio">INICIO</a></li>						
							<?php endif ?>					
						<?php endif ?>


						<?php if (isset($_GET["paginas"])): ?>
							<?php if ($_GET["paginas"] == "salir" ): ?>
								<li class="active"><a href="index.php?paginas=salir">SALIR</a></li>
							<?php else: ?>
								<li><a href="index.php?paginas=salir">SALIR</a></li>						
							<?php endif ?>
						<?php else: ?>
							<li class="active"><a href="index.php?paginas=registro">REGISTRO</a></li>
							<li><a href="index.php?paginas=ingreso">INGRESO</a></li>
							<li><a href="index.php?paginas=inicio">INICIO</a></li>
							<li><a href="index.php?paginas=salir">SALIR</a></li>					
						<?php endif ?>
					</ul>
				</div>
			</nav>
		</div>
	</div>

	<div class="container-fluid bg-ligth">
		<div class="container py-5">
			<?php 
			if (isset($_GET['paginas'])) {
				if ($_GET["paginas"] == "registro" || 
					$_GET["paginas"] == "ingreso" ||
					$_GET["paginas"] == "inicio" ||
					$_GET["paginas"] == "salir" ){
					include "paginas/".$_GET['paginas'].".php";
			}else{
				include "paginas/error404.php";
			}
		}else{
			include "paginas/registro.php";	
		}
		
		?>
	</div>
</div>	
</body>
</html>