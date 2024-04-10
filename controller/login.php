<?php

class Login extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function user()
	{
		$user = $_POST['txtuser'];
		$pass = $_POST['txtpasswd'];

		$data = $this->model->Validar($user, $pass);

		if($data['chkusu'] == 1){
			session_start();
			$_SESSION['idpersonal'] = $data['idpersonal'];
			$this->view->Render('main/index');
		}else{
			$this->view->mensaje = "Usuario o contraseña incorrecta";
			$this->view->Render('login/index');
		}
	}

	function render()
	{
		$this->view->Render('login/index');
	}
}