
<?php 

$usuarios = ControladorFormularios::ctrSeleccionarRegistros();

/*echo "<pre>"; print_r($usuarios); echo "</pre>";
return;*/
 ?>

<!--table class="table table-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Email</th>
			<th>Fecha</th>
			<th>Accion</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($usuarios as $key => $value): ?>
			<tr>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["email"]; ?></td>
			<td><?php echo $value["fecha"]; ?></td>
			<td>
				<div class="btn-group">
					<button class="btn btn-warning"><i class="fa-sharp fa-solid fa-pencil"></i></button>
					<button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
				</div>
			</td>
		</tr>
		<?php endforeach ?>
		
	</tbody>
</table>-->	
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
<?php foreach ($usuarios as $key => $value): ?>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo $value["img_pelicula"]; ?>" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3><?php echo $value["director_pelicula"]; ?></h3>
        <p><?php echo $value["gender_pelicula"]; ?></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<?php endforeach ?>	


<!--div class="card-group">
		<div class="card" style="width:400px">
			<img class="card-img-top" src="<?php echo $value["img_pelicula"]; ?>" alt="Card image" style="width:100%">
			<div class="card-body">
				<h4 class="card-title"><?php echo $value["director_pelicula"]; ?></h4>
				<p class="card-text"><?php echo $value["gender_pelicula"]; ?></p>
				<a href="#" class="btn btn-primary">See Profile</a>
			</div>	
		</div>-->	