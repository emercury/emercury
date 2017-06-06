<?php
class PersistenciaUsuario
{
    //param es un objeto de categoria Usuario
    //conex es una variable de tipo conexion
    public function agregar($obj, $conex)
    {
        //Obtiene los datos del objeto $obj
        
        $nombre = $obj->getNombre();
        $apellido = $obj->getApellido();
        $cedula=$obj->getCedula();
        $telefono=$obj->getTelefono();
        $direccion = $obj->getDireccion();
        $email = $obj->getEmail();
        $contraseña = $obj->getContraseña();
        
		//Encripto la password antes de guardarla
        $password=sha1($password);
      
        
        //Genera la sentencia a ejecutar
		//La sql que vale es la primera, pero hay que completar los parametros en el execute
		
		$sql = "insert into usuario (cedula,password,nombre,apellido,categoria,correo,celular,tarjeta) 
        values (:cedula,:password,:nombre,:apellido,:categoria,:correo,:celular,:tarjeta)";
		
		$result = $conex->prepare($sql);
		$result->execute(array(":nombre" => $nombre, ":apellido" => $apellido,
								":cedula" => $cedula,":telefono" => $telefono,
								":direccion" => $direccion,":email" => $email,
                                ":contraseña" => $contraseña));
        
        
        //Para saber si ocurrió un error
        if($result)
        {
          return(true);
        }
        else
        {
          return(false);
        }
    }

     

   //Devuelve true si el ci coincide con la password
   public function verificarCedulaPassword($obj, $conex)
   {
        //Obtiene los datos del objeto $obj
        $cedula= trim($obj->getCedula());
        /*$pass= sha1(trim($obj->getPassword()));*/
        $pass= trim($obj->getPassword());

        $sql = "select * from usuario where CI=:cedula and Pass=:password";
		
        $consulta = $conex->prepare($sql);
		/* FORMA 1 de pasar los parametros es con el método bindParam
		/* con bindParam ligamos los parámetros de la consulta a las variables
		$consulta->bindParam(':ci', $ci, PDO::PARAM_STR);
		$consulta->bindParam(':pass', $pass, PDO::PARAM_STR);
		$consulta->execute();
		*/
		
		/* FORMA 2es pasar los parámetros como argumentos del método execute
		 utilizando un array asociativo */
		$consulta->execute(array(":cedula" => $cedula, ":password" => $pass));
		
		/*Despues de ejecutar la consulta como es un SELECT debo utilizar el método
		fetchAll que devuelve un array que contiene todas las filas del conjunto de resultados
		*/
		$result = $consulta->fetchAll();
		//Devuelvo el array que puede tener un registro o estar vacio si el usuario y contraseña no coinciden
		return $result;
    }

    public function obtenerCategoria($obj, $conex)
    {
        $cedula = trim($obj->getCedula);
        $sql = "SELECT Categoria from usuario WHERE CI=:cedula";
        $consulta = $conex->prepare($sql);
        $consulta->execute(array(":cedula" => $cedula));
    }
 }

?>
