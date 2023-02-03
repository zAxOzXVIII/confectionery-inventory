<?php 
require('../../config/db.php');
	if ($_POST) {
		if (!empty($_POST['nm_clt']) && !empty($_POST['price']) && !empty($_POST['orden'])) {
			$SQL = $conexion->prepare('INSERT INTO orders_cakeshop (nm_clt, orden, amount) VALUES (:nm_clt, :orden, :amount)');
			$SQL->bindParam(':nm_clt',$_POST['nm_clt']);
			$SQL->bindParam(':orden',$_POST['orden']);
			$SQL->bindParam(':amount',$_POST['price']);
			$SQL->execute();
			$c='Se envio correctamente';
		}else{
			$e = 'Rellenar todas las casillas';
		}
	}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="../../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../../css/specifications.css">
</head>
<body>
	<nav class="navbar nav-bg-color navbar-expand-lg">
  		<div class="container-fluid">
		  <a class="navbar-brand h1" href="../">Bon & Dulce</a>
  		</div>
  		<button class="navbar-toggler nav-toggler-position position-absolute end-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Enlace</a>
        <a class="nav-link active" href="./config/almacen.php">Almacen</a>
        <a class="nav-link active" href="./config/cerrar.php">Cerrar Sesion</a>
      </div>
    </div>
	</nav>
	<div class="wall-bg-color">
		<div class="container">
<div class="Registro_productos">
	<form method="POST">
	 <label>Nombre</label>
     <input type="text" name="nm_clt">

     <label>Precio</label>
     <input type="number" name="price">

     <label>Descripcion</label>
     <input type="text" name="orden">

     <input type="submit" value="Enviar">
	</form>
	<?php if(isset($e)){?>
	<h5>Error: <?php echo $e;?></h5>
	<?php }else if(isset($c)){echo $c;}?>
</div>
<a href="..\index.php">volver al menu</a>

</div>
	</div>
	<footer>
		<div class="footer-bg-color">
			<div class="footer-txt-color">
				
			</div>
		</div>
	</footer>
<script type="text/javascript" src="../../js/bootstrap.js"></script>
</body>
</html>