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