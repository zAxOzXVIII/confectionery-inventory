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
		if($conexion->error){
			die("Error al crear la base de datos " . $conexion->error);
		}

		$sql_table1 = "CREATE TABLE IF NOT EXISTS materials_cakeshop(
		id INT(11) not null auto_increment PRIMARY KEY,
		material VARCHAR(255) NOT NULL,
		material_stock INT(11) NOT NULL,
		date TIMESTAMP
	)";
	if($conexion->error){
		die("Error al crear la tabla de la base de datos 1" . $conexion->error);
	}
		$sql_table2 = "CREATE TABLE IF NOT EXISTS orders_cakeshop(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		nm_clt VARCHAR(126) NOT NULL,
		order VARCHAR(255) NOT NULL,
		amount INT(11) NOT NULL,
		date TIMESTAMP
	)";
	if($conexion->error){
		die("Error al crear la tabla de la base de datos 2" . $conexion->error);
	}
		$sql_table3 = "CREATE TABLE IF NOT EXISTS users_cakeshop(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		user VARCHAR(32) NOT NULL,
		password VARCHAR(32) NOT NULL,
		email VARCHAR(56) NOT NULL
	)";
	if($conexion->error){
		die("Error al crear la tabla de la base de datos 3" . $conexion->error);
	}
	$sql_table4 = "CREATE TABLE IF NOT EXISTS products_cakeshop(
		id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		product VARCHAR(32) NOT NULL,
		description VARCHAR(255) NOT NULL,
		value INT(11) NOT NULL,
		image VARCHAR(1000) NOT NULL
	)";
	if($conexion->error){
		die("Error al crear la tabla de la base de datos 4" . $conexion->error);
	}

	header(Location: ./);

?>
