<?php

/**
 *
 */
class DbMysql extends db
{
  private $dbMysql;

  public function __construct()
  {
    //Usamos un Json para pasar los datos de conexión a la db.
    $config = file_get_contents("../config.json");
    $json = json_decode($config, true);

    $host = $json["host"];;
    $dbname = $json["dbname"];;
    $port = $json["port"];
    // fin datos de conexión en json.

    $dsn = "mysql:host=$host;dbname=$dbname;port=$port";
    $user = $json["user"];
    $pass = $json["pass"]; //¿Cómo resolvemos que las contraseñas o usuarios sean diferentes.

    try {
      $this->dbMysql = new PDO($dsn, $user, $pass); //Resuelve la conexión.
      $this->dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Para poder ver en php los errores que devuelva SQL

    } catch (\Exception $e) {
        echo "Hubo en error. Mensaje: ";
        var_dump($e->getMessage());
        $db = null;
    }
  }

  public function guardarUsuario(Usuario $user, string $file = null){

    $stmt = $this->dbMysql->prepare("INSERT INTO usuarios VALUES(default, :name, :email, :password)");

    $stmt->bindValue(":name", $user->getName());
    $stmt->bindValue(":email", $user->getEmail());
    $stmt->bindValue(":password", $user->getPassword());

    $stmt->execute();


  }

  public function buscarUsuarioPorMail(string $email){

    $stmt = $this->dbMysql->prepare("SELECT * FROM usuarios WHERE email = :email");

    $stmt->bindValue(":email", $email);
    $stmt->execute();

    $usuarioArray = $stmt->fetch(PDO::FETCH_ASSOC);
    if($usuarioArray){
        $usuario = new Usuario($usuarioArray);
    } else {
      $usuario = null;
    }
    return $usuario;

  }














}
