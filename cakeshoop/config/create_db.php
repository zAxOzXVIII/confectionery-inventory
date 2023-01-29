<?php 
	$servidor='localhost';
	$nmusuario='root';
	$password="";
	$db = "pasteleriaDB";
	$conexion=new mysqli($servidor,$nmusuario,$password,$db);
	if ($conexion->connect_error) {
		die("Conexion fallida: " . $conexion->connect_error);
	}
	
		$sql = "CREATE DATABASE IF NOT EXISTS pasteleriaDB";
		if ($conexion->query($sql) === true) {
		echo "Base de datos creada correctamente";
		}else if($conexion->error){
		die("Error al crear la base de datos " . $conexion->error);
	}

		$sql_table1 = "CREATE TABLE IF NOT EXISTS materials_cakeshop(
		id INT(11) not null auto_increment PRIMARY KEY,
		material VARCHAR(255) NOT NULL,
		material_stock INT(11) NOT NULL,
		date TIMESTAMP
	)";
	if ($conexion->query($sql_table1) === true) {
		echo "Tabla creada correctamente";
	}else{
		die("Error al crear la tabla de la base de datos " . $conexion->error);
	}
		$sql_table2 = "CREATE TABLE IF NOT EXISTS orders_cakeshop(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		nm_clt VARCHAR(126) NOT NULL,
		order VARCHAR(255) NOT NULL,
		amount INT(11) NOT NULL,
		date TIMESTAMP
	)";
	if ($conexion->query($sql_table2) === true) {
		echo "Tabla creada correctamente";
	}else{
		die("Error al crear la tabla de la base de datos " . $conexion->error);
	}



?>