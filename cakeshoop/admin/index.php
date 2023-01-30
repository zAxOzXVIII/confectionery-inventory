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
<div>Texto</div>

<?php 
include('template/footer.php');
?>
