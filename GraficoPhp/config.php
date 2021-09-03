<?php
$host = "localhost";
$dbname = "lineas_db";
$username = "root";
$password = "";

// Conexión PDO
try {
	// Cree un nuevo objeto PDO y guárdelo en la variable $ db
	$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
	// Configure el modo de error en PDO para mostrar inmediatamente las excepciones cuando haya errores
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $ex){
	die("Connection error: " . $ex->getMessage());
}
error_reporting(0);
?>
