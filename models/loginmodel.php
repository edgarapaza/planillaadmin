<?php

class LoginModel extends Model
{
  function __construct()
  {
    parent::__construct();
  }
  // El usuario debe ser unico en la base de datos
  function Validar($username)
  {
    $sql = "SELECT * FROM `login` WHERE `usuario` = '$username';";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
  }
  function admin(){
    $sql = "SELECT COUNT('id') as total FROM login;";
    $res = $this->conn->ConsultaArray($sql);
    return $res;
  }
  function alterTable(){
		$sql = "ALTER TABLE login AUTO_INCREMENT = 1;";
		$res = $this->conn->ConsultaSin($sql);
    return $res;
	}
}