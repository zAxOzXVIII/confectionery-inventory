<?php 
require('../config/db.php');
session_start();
if(isset($_SESSION['user_id'])){
	$records = $conexion->prepare("SELECT id,user FROM users_cakeshop WHERE id=:id");
	$records->bindParam(':id',$_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);
	$user = null;
	if(count($results)>0){
		$user = $results;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="./../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./../css/specifications.css">
</head>
<body>
	<nav class="navbar nav-bg-color navbar-expand-lg">
  		<div class="container-fluid">
    		<span class="navbar-brand mb-0 h1">Bon & dulce</span>
  		</div>
  		<button class="navbar-toggler nav-toggler-position position-absolute end-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../">Principal</a>
        <a class="nav-link active" href="./config/almacen.php">Almacen</a>
        <a class="nav-link active" href="./config/cerrar.php">Cerrar Sesion</a>
      </div>
    </div>
	</nav>
	<div class="wall-bg-color">
		<div class="container">
<div style="text-align: center; color: red;"><h2>Bienvenido <?php echo $user['user'];?></h2></div>



<div class="title_menu text-center">
	<h1>Bon & dulce</h1>
</div>
<div class="row align-items-start text-center">
<!--Sector Primario-->
<div class="sector_one col">
	<h1>Inventarios</h1>
	<!--Inventario de materia prima-->
    <div class="record_material_inventory d-grid gap-2 col-6 mx-auto" style=>
		<label>Registrar Materia Prima</label>
		<a class="btn btn-primary" href="records\records_material_inventory.php">Registrar</a>
	</div>
	<div class="view_material_inventory d-grid gap-2 col-6 mx-auto">
		<label>Inventario de materia prima</label>
		<a href="" class="btn btn-primary">Ver Inventario</a>
	</div>
	<!--Inventario de Productos a la venta-->
	<div class="record_products_inventory d-grid gap-2 col-6 mx-auto">
		<label>Registrar Productos</label>
		<a class="btn btn-primary" href="records\records_products_inventory.php">Registrar</a>
	</div>
		<div class="view_products_inventory d-grid gap-2 col-6 mx-auto">
			<label>Inventario de Productos</label>
			<a href="" class="btn btn-primary">Ver Inventario</a>
		</div>
</div>
<!--imagen-->
    <div class="imagen col ">
		<img src="../images/new.png" height="200" alt="">
	</div>

<!--Segundo Sector-->
<div class="sector_two col ">
	<h1>Ventas</h1>
	<!--Realizar venta-->
	<div class="new_sale d-grid gap-2 col-6 mx-auto">
		<label>Nueva venta</label>
		<a href="" class="btn btn-primary">Registrar Venta</a>
	</div>
	<!--Venta Personalizada-->
	<div class="custom_sale d-grid gap-2 col-6 mx-auto">
		<label>Venta Personalizada</label>
		<a href="sales\custom_sale.php" class="btn btn-primary">Crear Venta</a>
	</div>
</div>
<!--Sector de apartados-->
<div class="sector_three">
	<h1>Apartados</h1>
	<div class="new_reservation btn btn-primary">
		<a href="" class="btn btn-primary">Crear Apartado</a>
	</div>
	<div class="tabla">
		<table border="1" class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Telefono</td>
					<td>Fecha de apartado</td>
					<td>Fecha de entrega</td>
					<td>Monto a cancelar</td>
					<td>Monto cancelado</td>
					<td>Descripcion del producto</td>
				</tr>
			</thead>

		</table>
	</div>
</div>
</div>
</div>
	</div>
	<footer>
		<div class="footer-bg-color">
			<div class="footer-txt-color">
				
			</div>
		</div>
	</footer>
<script type="text/javascript" src="../js/bootstrap.js"></script>
</body>
</html>