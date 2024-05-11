<?php
class Personal extends Controller
{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->Render('personal/index');
    }
    public function create(){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $sexo = $_POST['sexo'];
        $fnacimiento = $_POST['fnacimiento'];
        if (!empty($nombre) && !empty($apellido) && !empty($sexo) && !empty($fnacimiento)){
            if($this->model->Create($nombre, $apellido, $sexo, $fnacimiento)){
                $this->view->Render('registro/index');
            }else{
                $this->render();
            }
        }else{
            $this->render();
        }
        
    }
}

?>