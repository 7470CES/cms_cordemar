<?php


$server="localhost";
$usuario="root";
$pass="";
$db="curso_mvc";

$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha_creacion=time();
$fecha_creacion=(date("Y-m-d",$fecha_creacion));


$conexion=mysqli_connect($server,$usuario,$pass,$db)
or die ("error en la conexion");



$insertar="INSERT into  contenidos (titulo,contenido,fecha_creacion)values('$titulo','$contenido','$fecha_creacion')";

$resultado=mysqli_query($conexion,$insertar)
or die ("Error Al Insertar Los Datos");

mysqli_close($conexion);

echo '<script>alert("Registro Insertado Exitosamente");</script>';
header('Location: generaldate.php');

?>