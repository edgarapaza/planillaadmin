<?php

class RegistroModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function Create($id, $username,$password,$nivel){
    $sql = "INSERT INTO `mtc`.`login` (`idpersonal`, `usuario`, `passwd`, `nivusu`, `chkusu`) VALUES ('$id', '$username', '$password', '$nivel', '1');";
    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }
  function admin(){
    $sql = "SELECT COUNT('id') as total FROM login;";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
  }
  

  public function sinLogin(){
    $sql = "SELECT p.idpersonal, p.nombre, p.apellido
    FROM personal p
    LEFT JOIN login l ON p.idpersonal = l.idpersonal
    WHERE l.idlogin IS NULL;";
    $res = $this->conn->ConsultaCon($sql);
    return $res;
  } 


}