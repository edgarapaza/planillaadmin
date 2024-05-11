<?php

class TablasModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function getLogin()
  {
    $sql = "SELECT l.idlogin,l.usuario, l.passwd, l.nivusu,l.chkusu,concat(p.nombre,' ',p.apellido) as nombre, l.fecCreate
    FROM personal p
    LEFT JOIN login l ON p.idpersonal = l.idpersonal
    WHERE l.idlogin LIKE '%';";
    $res = $this->conn->ConsultaCon($sql);
    return $res;
  }
  public function getPersonal()
  {
    $sql = "SELECT * FROM personal;";
    $res = $this->conn->ConsultaCon($sql);
    return $res;
  }
  public function deleteLogin($id)
  {
    $sql = "DELETE FROM `mtc`.`login` WHERE (`idlogin` = '$id');";
    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }
  public function getLoginUnique($id)
  {
    $sql = "SELECT * FROM `mtc`.`login` WHERE (`idlogin` = '$id');";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
  }

  public function update($id,$usuario,$password,$nivel,$estado)
  {
    $sql = "UPDATE `mtc`.`login` SET `usuario` = '$usuario', `passwd` = '$password', `nivusu` = '$nivel', `chkusu` = '$estado' WHERE (`idlogin` = '$id');";
    $res = $this->conn->ConsultaSin($sql);
    return $res;
  }


}