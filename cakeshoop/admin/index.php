<?php 
include('template/header.php');
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

<div style="color: red"><h2>Bienvenido <?php echo $user['user'];?></h2></div>


<?php 
include('template/footer.php');
?>
<div class="title_menu">
	<h1>Bon & dulce</h1>
</div>
<!--Sector Primario-->
<div class="sector_one">
	<h1>Inventarios</h1>
	<!--Inventario de materia prima-->
    <div class="record_material_inventory">
		<label>Registrar Materia Prima</label>
		<a href="records\records_material_inventory.php"><input type="button" value="Ir"></a>
	</div>
	<div class="view_material_inventory">
		<label>Ver Inventario</label>
		<input hreft=""	type="submit">
	</div>
	<!--Inventario de Productos a la venta-->
	<div class="record_products_inventory">
		<label>Registrar Productos</label>
		<a href="records\records_products_inventory.php"><input type="button" value="Ir"></a>
	</div>
		<div class="view_products_inventory">
			<label>Ver Inventario</label>
			<input hreft="" type="submit">
		</div>
</div>

<!--Segundo Sector-->
<div class="sector_two">
	<h1>Ventas</h1>
	<!--Realizar venta-->
	<div class="new_sale">
		<label>Nueva venta</label>
		<input hreft="" type="submit">
	</div>
	<!--Venta Personalizada-->
	<div class="custom_sale">
		<label>Venta Personalizada</label>
		<a href="sales\custom_sale.php"><input type="submit" value="Ir"></a>
	</div>
</div>
<!--Sector de apartados-->
<div class="sector_three">
	<h1>Apartados</h1>
	<div class="new_reservation">
		<label>Nuevo Apartado</label>
		<input hreft="" type="submit">
	</div>
</div>
