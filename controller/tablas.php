<?php
class Tablas extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render('tablas/index');
    }
    function renderEdit($parant = null){
        $id = $parant[0];
        $data = $this->model->getLoginUnique($id);
        $this->view->data = $data;
        $this->view->Render('tablas/editar');
    }
    public function getLogin(){
        $data = $this->model->getLogin();
		$json = array();
		while($row = mysqli_fetch_array($data)){
			$json[] = array(
                "id" => $row['idlogin'],
                "nombre" => $row['nombre'],
                "usuario" => $row['usuario'],
                "pass" => $row['passwd'],
                "nivusu" => $row['nivusu'],
                "estado" => $row['chkusu'],
                "fecha" => $row['fecCreate']
			);
			
		}
		echo json_encode($json);
    }
    public function getPersonal(){
        $data = $this->model->getPersonal();
		$json = array();
		while($row = mysqli_fetch_array($data)){
			$json[] = array(
                "nombre" => $row['nombre'],
                "apellido" => $row['apellido'],
                "sexo" => $row['sexo'],
                "fecha" => $row['fechanac'],
                "fechacre" => $row['fecCreate']
			);
			
		}
		echo json_encode($json);
    }
    public function deleteLogin($parant = null){
        $id = $parant[0];
        if($this->model->deleteLogin($id)){
            $this->render();
        }else{
            $this->render();
        }
    }
    public function updateLogin(){
        $id = $_POST['idlogin'];
        $usuario = $_POST['usuario'];
        // $password = $_POST['password'];
        if($_POST['nivel']=='admin'){
            $nivel= 1;
        }else if($_POST['nivel']=='personal'){
            $nivel= 0;
        }else if($_POST['nivel']=='viewer'){
            $nivel= 2;
        }
        $estado = $_POST['estado']=='activo' ? 1 : 0;

        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        if($this->model->update($id,$usuario,$password,$nivel,$estado)){
            $this->render();
        }else{
            $this->renderEdit($id);
        }
    }
}

?>