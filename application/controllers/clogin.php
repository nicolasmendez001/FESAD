<?php

class clogin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mfesad');
    }
    public function index(){

        if ($this->session->userdata('username')){
            redirect('cdocentes');
        }

        if (isset($_POST['pass'])){
            if ($this->mfesad->login($_POST['name'],md5($_POST['pass']))){
                $this->session->set_userdata('username',$_POST['name']);
                redirect('cdocentes');
            }else{
                $datos = array('msj'=>"Datos Incorrectos");
                $this->load->view('vlogin', $datos);
            }
        }else{
            $datos = array('msj'=>"");
            $this->load->view('vlogin', $datos);
        }
    }
    public function cerrarsesion(){
        $this->session->sess_destroy();
        redirect('clogin');
    }
}