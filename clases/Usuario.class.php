<?php
require_once('../persistencia/PersistenciaUsuario.class.php');

class Usuario
{
    private $nombre;
    private $apellido;
    private $cedula;
    private $telefono;
    private $direccion;
    private $email;
    private $contraseña;
  

    
    function __construct($n='',$a='', $ci='', $t='', $d='', $e='',$c='')
    {
        $this->nombre= $n;
        $this->apellido= $a;
        $this->cedula= $ci;
        $this->telefono= $t;
        $this->direccion= $d;
        $this->email= $e;
        $this->contraseña= $c;
    }
    
    //Métodos set

    function setNombre($n)
    {
      $this->nombre=$n;
    }
    
    function setApellido($a)
    {
      $this->apellido= $a;
    }
    
	function setCedula($ci)
    {
      $this->cedula= $ci;
    }
    
    function setTelefono($t)
    {
      $this->telefono= $t;
    }

    function setDireccion($d)
    {
      $this->direccion= $d;
    }
      
 	  function setEail($e)
    {
      $this->email= $e;
    }
    
	  function setContraseña($c)
    {
      $this->contraseña= $c;
    }
  

    //Métodos get
    
    function getNombre()
    {
      return $this->nombre;
    }
    
    function getApellido()
    {
      return $this->apellido;
    }
    
  	function getCedula()
    {
      return $this->cedula;
    }
    
    function getTelefono()
    {
      return $this->telefono;
    }
    
    function getDireccion()
    {
      return $this->direccion;
    }    
  
    function getEmail()
    {
      return $this->email;
    }
    
	  function getContraseña()
    {
      return $this->contraseña;
    }
    
        
    //Otros Métodos
    public function alta($conex)
    {
        $pu=new PersistenciaUsuario;
        return ($pu->agregar($this, $conex));
    }
    
    
    //Devuelve true si el Login y el Password coinciden
    function coincideCedulaPassword($conex)
    {
        $pu= new PersistenciaUsuario;
        return $pu->verificarCedulaPassword($this, $conex);
        
    }
}

?>
