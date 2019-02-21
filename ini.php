<?php

try{
$conexion = new PDO('mysql:host=localhost;dbname=cms_cordemar','root','');
}catch (PDOException $e){
	
	echo "No se pudo conectar a la base de datos:  ". $e;
	
}
?>