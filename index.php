<?php
session_start();
require 'Funciones.php';

$obj= new Funciones();

if (isset($_POST['email'],$_POST['pass'])){
	$checar= $obj->logIN($_POST['email'],$_POST['pass']);
	


//iniciar sesion

if($checar){
	
	$_SESSION['admin']= true;
	
	header('Location:generaldate.php');
	
}


}
?>

<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login-CMS CORDEMAR.INFO</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css"  href="css/miestilos.css">
</head>
<body>



<div class="container p-2 border">
</br>
</br>
</br>
</br>
<form action="" class="form-horizontal" method="post">
 <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Iniciar Sesión</div>
                    <div class="panel-body bg-info border-color-dark"> 
                        <div class="alert alert-danger text-center" style="display:none;" id="error">
                            <p>Usuario o Password no identificados</p>
                        </div>                     
                        <form role="form">
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Digite el Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder=" Digite el Password">
                                </div>
                            </div>                     
                            <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-lock"></span> Entrar</button>   
                        </form>
						
						
						
						
                    </div>
                </div>
            </div>
        </div>
</form>



</div>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<footer><?php include('footer.php');?>
</body>
</html>