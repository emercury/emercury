<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>eMercury</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">eMercury</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="modal_sesion.php" data-toggle="modal" data-target="#modal_sesion">Iniciar Sesion</a></li>

<!-- Modal -->
<div class="modal fade" id="modal_sesion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->



        <li><a href="modal_registro.php" data-toggle="modal" data-target="#modal_registro">Registrarse</a></li>

<!-- Modal -->
<div action="../procesamiento/registro_usuarios.php" class="modal fade" id="modal_registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div action="../procesamiento/registro_usuarios.php" class="modal-dialog">
        <div action="../procesamiento/registro_usuarios.php" class="modal-content">
            
        </div> <!-- /.modal-content -->
    </div> <!-- /.modal-dialog -->
</div> <!-- /.modal -->

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<ul class="nav nav-tabs" data-tabs="tabs">
  <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown">Categorias<span class="caret"></span></a>
   <ul class="dropdown-menu">
      <li><a href="#">Submenu 1-1</a></li>
      <li><a href="#">Submenu 1-2</a></li>
      <li><a href="#">Submenu 1-3</a></li> 
    </ul>
  </li>
  <li role="presentation" class="active"><a data-toggle="tab" href="#inicio">Inicio</a></li>
  <li role="presentation"><a data-toggle="tab" href="#cuenta">Cuenta</a></li>
  <li role="presentation"><a data-toggle="tab" href="#alertas">Alertas</a></li>
</ul>

<section class="container">

<div class="tab-content">
<div id="inicio" class="tab-pane active" style="margin-top: 20px">
<div class="container">
           <div class="row">
               <div class="jumbotron">
                  <h1>Articulo destacado de la semana</h1>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus dolorem ad officiis nihil delectus quidem animi rerum, molestias sint natus ducimus quod, unde molestiae dolores laboriosam error facilis odio doloremque.</p>
                  <p><a class="btn btn-primary btn-lg" role="button">Leer mas</a></p>
            </div>
           </div>
       </div>
<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
                </div>
                 <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
        </div>
        </div>
        </div>
<div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure><img class="img-responsive" src="s8.0.png" alt="Galaxy S8"></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure><img class="img-responsive" src="ios.png" alt="Iphone 6s" style="overflow:hidden"></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
                </div>
                 <div class="col-xs-12 col-sm-6 col-md-4">
                    <h2>Titulo del articulo</h2>
                    <figure><img class="img-responsive" src="nokia.jpg" alt="1100" style="overflow:hidden"></figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat distinctio illo rerum atque ducimus, laboriosam debitis eum deserunt ab libero quis voluptas, illum, perferendis numquam aut aliquam itaque qui magnam!</p>
                    <a href="" class="btn btn-success">Leer mas</a>
        </div>    
        </div>
        </div>
</div>

<div id="cuenta" class="tab-pane">
</div>
   
</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../lib/jquery-3.2.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../lib/bootstrap.min.js"></script>
  </body>
</html>