<?php
/**
 *
 */
// include "dbjson.php"; Está incluido en init.php junto con la instancia.

class Usuario
{ //Atributos
  private $id;
  private $name;
  private $email;
  private $password;

  //Constructor
  function __construct(Array $array)
  {
    // 2 Origenes: 1ra es desde el formulario de registro. 2da
    global $json; //Tremos la instancia de base de datos para poder usarla. Otra opción es pasarla por parámetro.

    $this->id = $json->nextId(); //nextID();
    $this->name = $_POST["name"];
    $this->email = $_POST["email"];
    $this->password = password_hash($_POST["pass"], PASSWORD_DEFAULT);

  }

  //Métodos
  public function getId(){
    return $this->id;
  }
  public function getName(){
    return $this->name;
  }
  public function getEmail(){
    return $this->email;
  }
  public function getPassword(){
    return $this->password;
  }



}
