

<?php

session_start();
if(isset($_SESSION['admin'])){
	
require 'Funciones.php';

$obj2= new Funciones();
	
	


?>


<?php
	//require 'Funciones.php';
	$obj = new Funciones();
	$noticias= $obj->consultarNoticias();
	
	
?>




<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>



<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="">Bienvenido al CMS cordemar.info</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="logout.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/cerrar_sesion_2.png" width="40" height="40"/><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>


<div class="container p-2 border">

<h1 class="page-header">Noticias</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="newregistro.php">Crear Nueva Noticia</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th>Titulo</th>
			<th>Fecha De CreaciÃ³n</th>
        </tr>
    </thead>
    <tbody>
    <?php   foreach($noticias as $fila):   ?>
        <tr>
            <td><?php echo $fila['id_contenido']; ?></td>
            <td><?php echo $fila['titulo']; ?></td>
			  <td><?php echo $fila['fecha_creacion']; ?></td>
            <td>
                <a href="updateinfo.php?id_contenido=<?php echo $fila['id_contenido']; ?>"><img src="img/modificar.jpeg" width="40" height="40" /></a>
            </td>
       
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 


</div>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

<?php }else    { header('Location:index.php');} ?>