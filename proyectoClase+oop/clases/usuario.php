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
    if(isset($array["id"])){
      $this->id = $array["id"];
      $this->password = $array["password"];
    } else {
      $this->id = $json->nextId(); //nextID();
      $this->password = password_hash($array["password"], PASSWORD_DEFAULT);
    }
    $this->name = $array["name"];
    $this->email = $array["email"];


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
