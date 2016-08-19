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

    <script type="text/javascript">
      function formReset()
      {
        document.getElementById("miform").reset();
      }
    </script>

  </head>
  <body>
    
    <div class="container" style="margin-top: 50px;">

      <div class="col-md-3"></div>
      
      <div class="col-md-6">

          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Bienvenido al Formulario</h3>
            </div>
            <div class="panel-body">
              <form class="form-horizontal" method="POST" action="controlador.php" id="miform">
                <fieldset>

                  <div class="form-group">
                    <label for="focusedInput" class="col-lg-4 control-label">Nombre y Apellido</label>
                    <div class="col-lg-8">
                      <input class="form-control" style="text-align: center;" id="focusedInput" type="text" name="nombre" placeholder="Nombre Apellido">
                    </div>
                  </div>

                  <div class="container-fluid">

                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="focusedInput2" class="col-lg-4 control-label">Edad</label>
                      <div class="col-lg-8">
                        <input class="form-control" style="text-align: center;" id="focusedInput2" type="numeric" name="edad" placeholder="Edad">
                      </div>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                      <label for="select" class="col-lg-4 control-label">Pais</label>
                      <div class="col-lg-8">
                        <select class="form-control" id="select" name="pais" >

                          <?php foreach ($paises as $pais): ?>

                            <option><?php echo $pais; ?></option>

                          <?php endforeach;?>

                        </select>
                      </div>
                    </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-4">
                      <button onclick="formReset()" value="Reset" type="reset" class="btn btn-default">Limpiar</button>
                      <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                  </div>

                </fieldset>
              </form>
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