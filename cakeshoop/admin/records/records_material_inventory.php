<?php 
require('../../config/db.php');
	if ($_POST) {
		if (!empty($_POST['material']) && !empty($_POST['price']) && !empty($_POST['amount'])) {
			$SQL = $conexion->prepare('INSERT INTO materials_cakeshop (material, material_stock, value) VALUES (:material, :material_stock, :value)');
			$SQL->bindParam(':material',$_POST['material']);
			$SQL->bindParam(':material_stock',$_POST['amount']);
			$SQL->bindParam(':value',$_POST['price']);
			$SQL->execute();
			$c='Se envio correctamente';
		}else{
			$e = 'Rellenar todas las casillas';
		}
	}



?>
<div class="Registro_materia_prima">
	<h1>Registrar Materia Prima</h1>
	<form method="POST">
	 <label>Producto</label>
	 <input type="text" name="material">

	 <label>Precio Unitario</label>
	 <input type="number" name="price">

	 <label>Cantidad</label>
	 <input type="number" name="amount">

 	 <input type="submit" value="Enviar">
	</form>
	<?php if(isset($e)){?>
	<h5>Error: <?php echo $e;?></h5>
	<?php }else if(isset($c)){echo $c;}?>
</div>
<a href="..\index.php">volver al menu</a>
<!-- falta por decorar -->