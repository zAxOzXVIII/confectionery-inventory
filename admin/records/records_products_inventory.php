<?php 
require('../../config/db.php');
    if ($_POST) {
        if (!empty($_POST['name']) && !empty($_POST['price_sell']) && !empty($_POST['price_buy']) && !empty($_POST['amount'])) {
            $SQL = $conexion->prepare('INSERT INTO products_cakeshop (product, price_sell, price_buy, amount) VALUES (:product, :price_sell, :price_buy, :amount)');
            $SQL->bindParam(':product',$_POST['name']);
            $SQL->bindParam(':price_sell',$_POST['price_sell']);
            $SQL->bindParam(':price_buy',$_POST['price_buy']);
            $SQL->bindParam(':amount',$_POST['amount']);
            $SQL->execute();
            $c='Se envio correctamente';
        }else{
            $e = 'Rellenar todas las casillas';
        }
    }



?>
<div class="Registro_productos">
    <h1>Registrar Productos</h1>
    <form method="POST">
     <label>Nombre</label>
     <input type="text" name="name">

     <label>Precio Costo</label>
     <input type="number" name="price_buy">

     <label>Precio Venta</label>
     <input type="number" name="price_sell">

     <label>Cantidad</label>
     <input type="number" name="amount">

     <input type="submit" value="Enviar">
    </form>
    <?php if(isset($e)){?>
    <h5>Error: <?php echo $e;?></h5>
    <?php }else if(isset($c)){echo $c;}?>
</div>
<a href="..\index.php">volver al menu</a>