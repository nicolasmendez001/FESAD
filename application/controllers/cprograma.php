<?php

class cprograma extends CI_Controller
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
            $this->mfesad->guardarPrograma($_POST['nombre'],$_POST['semestre']);
        }

        $result = $this->mfesad->getProgramas();
        $datos = array('consulta'=>$result);
        $this->load->view('vprograma',$datos);

    }
    public function programa($id){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $result = $this->mfesad->getPeriodos();
        $program = $this->mfesad->getPrograma($id);
        $datos = array('consulta'=>$result,
        'id'=>$id);
        $this->load->view('vperiodoprograma',$datos);
    }

    public function editar($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }
        if (isset($_POST['nombre'])) {
            $this->mfesad->editarPrograma($id, $_POST['nombre'], $_POST['semestre']);
            redirect('cprograma');
        }
        $result = $this->mfesad->getPrograma($id);
        $datos = array('consulta' => $result);
        $this->load->view('veditarprograma', $datos);
    }

    public function asignaturas($id_programa,$id_periodo){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $result = $this->mfesad->getAsignaturasPrograma($id_programa,$id_periodo);
        $datos = array('consulta'=>$result);
        $this->load->view('vperiodoasignaturas',$datos);
    }

    public function eliminar($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }
        $this->mfesad->eliminarPrograma($id);

        $result = $this->mfesad->getProgramas();
        $datos = array('consulta' => $result);
        $this->load->view('vprograma', $datos);
    }

}