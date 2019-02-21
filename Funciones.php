<?php
require 'ini.php';

class Funciones{
	//Metodos/
	
	
	
	
  
	
	
	public function consultarNoticias(){
		
		global $conexion;
		
		
		$query= $conexion->prepare("SELECT * FROM contenidos");
		$query->execute();
		
		return $query->fetchALL();
		
	}




public function unRegistro($id_contenido){
	
global $conexion;
	
	
	$query= $conexion->prepare("SELECT * FROM contenidos WHERE id_contenido=:id_contenido");
	
	$query->execute([
	'id_contenido'=> $id_contenido
	]);
	$query->execute();
	
	return $query->fetch();
	
}


public function logIN($email,$pass){
	
	global $conexion;
	
	$query= $conexion->prepare("SELECT * FROM usuarios WHERE email=:email and password=:pass");
    $query->execute([
	    'email'=>$email,
		'pass'=>$pass
	
	]);
		
		return $query->fetch();
	
}



	
	
}


?>