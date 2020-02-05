<?php

class cprueba extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mfesad');
       
    }

    public function index()
	{
        $result = $this->mfesad->getDocente(1);
        $class = $this->mfesad->getClasesDocente(1);
        $count = $this->mfesad->getCountClasesDocente(1);
        $datos = array(
            'consulta' => $result,
            'count' => $count,
            'clases' => $class
        );
		$this->load->view('pdf/datos_docente_correo', $datos);
	}
}