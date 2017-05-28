<?php
if(!isset($_SESSION['PHPSESSID']) !="0") {
	session_start(); }
	
require_once('../clases/Usuario.class.php');
require_once('../logica/funciones.php');

//Obtiene los datos ingresados
$e = strip_tags(trim($_POST['email_usuario']));
$p = strip_tags(trim($_POST['password_usuario']));
$_SESSION["Email"] = $e;

$conex = conectar();
//$u= new Usuario ('',$login,md5($pass));
$u= new Usuario ($ci,$p);

$datos_u=$u->coincideEmailPassword($conex);

if (!empty($datos_u))
//si no está vacio el array es que coinciden el login y la password
{
//die(var_dump($datos_u));
$_SESSION["Email"] =$datos_u[0]["Email"];
$_SESSION["Password"] =$datos_u[0]["Pass"];


?>
	 <script type="text/javascript">
		location.href="../presentacion/index.php";
	</script>
<?php
}
else
{
//Si el array esta vacio, es que no encontro un registro que coincida el login y la password
?>
 <script type="text/javascript">
 
   window.alert("El eMail o Password \n no son correctos.");
   location.href="../presentacion/index.php";
 </script>
  <?php  
}
desconectar($conex);
 
?>
