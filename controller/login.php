<?php

class Login extends Controller
{

	function __construct()
	{
		parent::__construct();
	}
	function render()
	{
		$this->view->Render('login/index');
	}
	// Enviar solo mensajes de error cuando no se logue y con js que se muestre el por que de la falla
	public function user()
	{
		$user = trim(strtolower($_POST['usuario']));
		$pass = trim(strtolower($_POST['password']));

		// verifica usuarios db
		if($this->model->admin()['total']==0){
			$this->credentials($user, $pass);
			return;
		}
		$validar = $this->model->Validar($user);
		if(password_verify($pass, $validar['passwd'])){
			if($validar['chkusu'] == 0 && $validar['nivusu'] == 0 ){
				$this->view->mensaje = 'Este usuario no se encuentra activo';
				$this->view->render('login/index');
			}
			$_SESSION['katari'] = 'katariSoftware';
			$_SESSION['username'] = $validar['usuario'];
			$_SESSION['nivel'] = $validar['nivel'];
			$_SESSION['id'] = $validar['idlogin'];
			$this->view->mensaje = 'Credenciales correctas';
			header('location:'.constant('URL').'main');
		}else{
			$this->view->mensaje = 'Credenciales incorrectas';
			header('location:'.constant('URL'));
		}
	}
	public function logout()
	{
		session_destroy();
		$_SESSION['katari'] = '';
		$_SESSION['username'] = '';
		$_SESSION['nivel'] = '';
		$_SESSION['id'] = '';
		// $this->model->alterTable();
		$this->view->Render('login/index');
	}
	private function credentials($user, $pass)
	{
		// Ruta al archivo de credenciales
		$archivo = __DIR__ . '/credentials.txt';
		// Leer el contenido del archivo
		$contenido = file_get_contents($archivo);
		// Separar la línea en usuario y contraseña
		list($usuario, $password) = explode(':', trim($contenido));
		// Verificar las credenciales
		// cambiar permisos para que funcione unlik y chmod
		if ($user == $usuario && password_verify($pass, $password)) {
			chmod($archivo, 0666);
			unlink($archivo);
			$_SESSION['katari'] = 'katariSoftware';
			header('location:'.constant('URL').'registro/');
		} else {
			header('location:'.constant('URL'));
		}

	}
}