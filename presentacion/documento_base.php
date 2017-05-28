<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Inicio de sesión</h4>
      </div>
      <div class="modal-body">
          <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Inicio de sesión</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom_usuario">Usuario</label>  
  <div class="col-md-4">
  <input id="Nom_usuario" name="Nom_usuario" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Contraseña">Contraseña</label>
  <div class="col-md-4">
    <input id="Contraseña" name="Contraseña" placeholder="" class="form-control input-md" required="" type="password">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="lsubmit"></label>
  <div class="col-md-4">
    <button id="lsubmit" name="lsubmit" class="btn btn-success">Enviar</button>
  </div>
</div>

</fieldset>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../lib/jquery-3.2.1.min"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../lib/bootstrap.min.js"></script>
  </body>
</html>