<?php


class csalones extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mfesad');


    }
    public function index(){

        if (!$this->session->userdata('username')){
            redirect('clogin');
        }

        if (isset($_POST['nombre'])){
            $this->mfesad->guardarSalon($_POST['nombre'],$_POST['ubicacion']);
        }

        $result = $this->mfesad->getSalones();
        $datos = array('consulta'=>$result);
        $this->load->view('vsalones',$datos);
    }
    public function editar($id){
//        if (isset($_POST['nombre'])){
//            $this->mfesad->editarDocente($id,$_POST['nombre'],$_POST['correo'],$_POST['telefono']);
//            redirect('cdocentes');
//        }
//        $result = $this->mfesad->getDocente($id);
//        $datos = array('consulta'=>$result);
//        $this->load->view('veditardocente',$datos);
    }
    public function eliminar($id){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $this->mfesad->eliminarSalon($id);

        $result = $this->mfesad->getSalones();
        $datos = array('consulta'=>$result);
        $this->load->view('vsalones',$datos);

    }
    public function horario($id){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $result = $this->mfesad->getSalon($id);
        $datos = array('consulta'=>$result);
        $this->load->view('calendario/vhorariosalon',$datos);

    }
    public function clases($id){
        $clases = $this->mfesad->getClasesSalon($id);
        echo json_encode($clases);
    }

}