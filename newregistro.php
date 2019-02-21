<?php
require 'Funciones.php';
session_start();
if(isset($_SESSION['admin'])){
	

$obj2= new Funciones();
	
	


?>


<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>


<script>
function modificar(id)

alert(id);

</script>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="ckeditor/ckeditor.js"></script>
<script src="ckfinder/ckfinder.js"></script>
</head>
<body>




<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="">Nueva Noticia</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/cerrar_sesion_2.png" width="40" height="40"/><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="logout.php">Cerrar sesión</a></li>
          </ul>
        </li>
      </ul>

    </div>
  </nav>

<div class="container p-2 border">

<h1 class="page-header">
   
</h1>

<ol class="breadcrumb">
  <li><a href="generaldate.php">Noticias</a></li>
  <li class="active"></li>
</ol>

<form id="frm-alumno" action="insert.php" method="post" enctype="multipart/form-data">
    <input type="hidden" class="form-control-static" name="id" value="" />
    
   
    
    <div class="form-group">
        <label>Titulo</label>
        <input type="text" name="titulo" value="" class="form-control" />
    </div>
    
    <div class="form-group">
        <label>Contenido</label>
       <textarea rows="10" cols="80" name="contenido" id="editor1" class="form-control"></textarea>
    </div>
    
    <script type="text/javascript">
	window.onload= function(){
		
		editor = CKEDITOR.replace("editor1");
		CKFinder.setupCKEditor(editor,'http://localhost/cmscordemar/ckfinder')
	}
	</script>
   
    
    
    <div class="text-right">
        <button class="btn btn-success">Ingresar</button>
    </div>
</form>
</div>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html><?php }else    { header('Location:index.php');} ?>