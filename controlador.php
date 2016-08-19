<?php

	
	$nombre	= $_POST['nombre'];
	$edad 	= $_POST['edad'];
	$pais	= $_POST['pais'];

	if($nombre == "" or $edad == "" or $pais == "")
	{
		header("Location: index.php");
	}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Formulario</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
    
    <div class="container" style="margin-top: 50px;">

      <div class="col-md-3"></div>
      
      <div class="col-md-6">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Datos Personales</h3>
            </div>
            <div class="panel-body" style="margin-left: 15px;">
              
            	<h3>Nombre: <?php echo $nombre;?></h3> 

            	<h3>Edad: <?php echo $edad;?></h3> 

            	<h3>Pais: <?php echo $pais;?></h3> 

            	<div class="form-group">
		            <div class="col-lg-10 col-lg-offset-9">
		            	<form action="index.php">
		            	<button type="submit" class="btn btn-primary">Volver</button>
		            </div>
		        </div>

            </div>
          </div>

      </div>

      <div class="col-md-3"></div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>