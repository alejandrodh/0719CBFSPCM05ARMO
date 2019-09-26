<?php

/**
 *
 */
class Mascota
{
  private $nombre;
  private $color;
  private $especie;

  public function __construct($param1, $param2){
    $this->nombre = $param1;
    $this->especie = $param2;
  }

  public function setNombre($nombre){
    $this->nombre = $nombre;
    return $this;
  }
  public function setColor($color){
    $this->color = $color;
    return $this;
  }
  public function setEspecie($especie){
    $this->especie = $especie;
    return $this;
  }

  public function getNombre(){
    return $this->nombre;
  }
  public function getColor(){
    return $this->nombre;
  }
  public function getEspecie(){
    return $this->nombre;
  }



}
