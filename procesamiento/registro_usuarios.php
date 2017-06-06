<?php	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "emercury";

$ci = $_POST["CI"];
$n = $_POST["Nombre"];
$a = $_POST["Apellido"];
$d = $_POST["Direccion"];
$t = $_POST["Telefono"];
$e = $_POST["Email"];
$c = $_POST["Contraseña"];

/*if ($p == $p1) {*/
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (Ci, Nombre, Apellido, Direccion, Email, Password)
    VALUES ('$ci','$n','$a','$d','$e',SHA('$c'))";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Nuevo registro creado exitosamente";
    }
catch(PDOException $er)
    {
    echo $sql . "<br>" . $er->getMessage();
    }
/*}
else {
    echo "La verificacion de contraseña no coincide.";
}*/

?>

 <script type="text/javascript">
   location.href="../presentacion/index.php";
 </script>

<?php
$conn = null;
?> )