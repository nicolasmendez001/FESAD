<?php

class cperiodos extends CI_Controller
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

        if (isset($_POST['anio'])){
            $this->mfesad->guardarPeriodo($_POST['anio'],$_POST['semestre']);
        }

        $periodos = $this->mfesad->getPeriodos();
        $datos = array('periodos'=>$periodos);
        $this->load->view('vperiodos',$datos);
    }
}