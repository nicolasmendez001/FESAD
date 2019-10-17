<?php
/**
 * Created by PhpStorm.
 * User: EdisonSolano
 * Date: 26/03/2019
 * Time: 8:39 AM
 */

class casignaturas extends CI_Controller
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
            $this->mfesad->guardarAsignatura($_POST['programa'],$_POST['periodo'],$_POST['nombre'],$_POST['creditos'],$_POST['semestre']);
        }

        $result = $this->mfesad->getAsignaturas();
        $programas = $this->mfesad->getProgramas();
        $periodos = $this->mfesad->getPeriodos();
        $datos = array('consulta'=>$result,
            'programas'=>$programas,
            'periodos'=>$periodos);
        $this->load->view('vasignaturas',$datos);
    }
}