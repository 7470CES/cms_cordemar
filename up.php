<?php


$server="localhost";
$usuario="root";
$pass="";
$db="cms_cordemar";

$id_contenido=$_POST['id_contenido'];
$titulo=$_POST['titulo'];
$contenido=$_POST['contenido'];
$fecha_creacion=$_POST['fecha_creacion'];
$fecha_creacion=time();
$fecha_creacion=(date("Y-m-d",$fecha_creacion));

$conexion=mysqli_connect($server,$usuario,$pass,$db)
or die ("error en la conexion");



mysqli_query($conexion,"UPDATE contenidos SET titulo='$titulo',contenido='$contenido', fecha_creacion='$fecha_creacion' WHERE id_contenido=$id_contenido")
or die("error al actualiza");

mysqli_close($conexion);

echo '<script>alert("Registro Actualizado Exitosamente")</script>';
header('Location: generaldate.php');

?>