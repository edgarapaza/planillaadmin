<?php

class PersonalModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function Create($nombre,$apellido,$sexo,$fechanac){
    $sql = "INSERT INTO `mtc`.`personal` (`nombre`, `apellido`, `sexo`, `fechanac`) VALUES ('$nombre', '$apellido', '$sexo', '$fechanac');";
    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }



}