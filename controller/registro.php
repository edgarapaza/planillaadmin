<?php
class Registro extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render('registro/index');
    }
    public function create(){
        // echo $_POST['usuario'].'<br>'.'zeta:$2y$10$JQnPSdXNUiEBpMK/MOrtn.76dHTgJiwz9hg4N1RoJiJ/S2EqdjYRC';
        // echo $_POST['password'].'<br>';
        // echo $_POST['password2'].'<br>';
        // echo $_POST['nivel'].'<br>';
        if(!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['nivel']) && ($_POST['password']== $_POST['password2'])){
            $usuario = $_POST['usuario'];
            $id = $_POST['personal'];
            // 1 == admin, 0 == personal, 2==viewer
            if($this->model->admin()['total']==0){
                $nivel = 1;
            }else if($_POST['nivel']=='admin'){
                $nivel= 1;
            }else if($_POST['nivel']=='personal'){
                $nivel= 0;
            }else if($_POST['nivel']=='viewer'){
                $nivel= 2;
            }
            $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
            try{
                if($this->model->Create($id, $usuario, $pass, $nivel)){
                    $this->view->mensaje = "Se ha registrado con exito";
                    $this->view->Render('tablas/index');
                }else{
                    $this->view->mensaje = "Primero llene datos del personal";
                    $this->view->Render('personal/index');
                }
            }catch(Exception $e){
                $this->view->Render('personal/index');
            }
        }else{
            $this->view->mensaje = "Faltan datos o no coinciden las contraseñas";
            $this->render();
        }
    }
    public function sinLogin(){
        $data = $this->model->sinLogin();
		$json = array();
		while($row = mysqli_fetch_array($data)){
			$json[] = array(
				'id' => $row['idpersonal'],
				'nombres' => $row['nombre'].' '.$row['apellido'],
			);
			
		}
		echo json_encode($json);
    }
}

?>