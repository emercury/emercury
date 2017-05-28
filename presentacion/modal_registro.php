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
<legend>Registro</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre">Nombre</label>  
  <div class="col-md-5">
  <input id="Nombre" name="Nombre" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Apellido">Apellido</label>  
  <div class="col-md-5">
  <input id="Apellido" name="Apellido" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CI">Cedula</label>  
  <div class="col-md-4">
  <input id="CI" name="CI" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Documento de Identidad</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefono">Telefono</label>  
  <div class="col-md-4">
  <input id="Telefono" name="Telefono" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Movil o fijo</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-5">
  <input id="Email" name="Email" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Direccion">Dirección</label>  
  <div class="col-md-6">
  <input id="Direccion" name="Direccion" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="Nom_Usuario"></label>  
  <div class="col-md-5">
  <span class="help-block"><br>Datos de ingreso</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nom_Usuario">Usuario</label>  
  <div class="col-md-5">
  <input id="Nom_Usuario" name="Nom_Usuario" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Contraseña">Contraseña</label>
  <div class="col-md-5">
    <input id="Contraseña" name="Contraseña" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnEnviar"></label>
  <div class="col-md-4">
    <button id="btnEnviar" name="btnEnviar" class="btn btn-success">Enviar</button>
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
      
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../lib/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../lib/bootstrap.min.js"></script>
  </body>
</html>