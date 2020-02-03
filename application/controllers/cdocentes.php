<?php

class cdocentes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mfesad');
       
    }
    public function index()
    {

        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }

        if (isset($_POST['nombre'])) {
            $this->mfesad->guardarDocente($_POST['nombre'], $_POST['correo'], $_POST['telefono']);
        }

        $result = $this->mfesad->getDocentes();
        $datos = array('consulta' => $result);
        $this->load->view('vdocentes', $datos);
    }
    public function editar($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }
        if (isset($_POST['nombre'])) {
            $this->mfesad->editarDocente($id, $_POST['nombre'], $_POST['correo'], $_POST['telefono']);
            redirect('cdocentes');
        }
        $result = $this->mfesad->getDocente($id);
        $datos = array('consulta' => $result);
        $this->load->view('veditardocente', $datos);
    }
    public function eliminar($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }
        $this->mfesad->eliminarDocente($id);

        $result = $this->mfesad->getDocentes();
        $datos = array('consulta' => $result);
        $this->load->view('vdocentes', $datos);
    }
    public function horario($id)
    {
        if (!$this->session->userdata('username')) {
            redirect('clogin');
        }
        $result = $this->mfesad->getDocente($id);
        $class = $this->mfesad->getClasesDocente($id);
        $count = $this->mfesad->getCountClasesDocente($id);
        $datos = array(
            'consulta' => $result,
            'count' => $count,
            'clases' => $class
        );
        $this->load->view('calendario/vhorariodocente', $datos);
    }
    public function clases($id)
    {
        $clases = $this->mfesad->getClasesDocenteFormat($id);
        echo json_encode($clases->result_array());
    }

    public function reporte($id)
    {
        $this->load->library('mydompdf');
        $result = $this->mfesad->getDocente($id);
        $class = $this->mfesad->getClasesDocente($id);
        $count = $this->mfesad->getCountClasesDocente($id);
        $datos = array(
            'consulta' => $result,
            'count' => $count,
            'clases' => $class
        );
        
        $html= $this->load->view('pdf/datos_docente', $datos, true);
        $this->mydompdf->load_html($html);
        $this->mydompdf->render();
        $this->mydompdf->set_base_path('<?= base_url() ?>/resources/css/dompdf.css'); //agregar de nuevo el css
        $this->mydompdf->stream("reportedocente.pdf", array("Attachment" => false));
    }

    public function notificar($id)
    {
        $result = $this->mfesad->getDocente($id);
        $class = $this->mfesad->getClasesDocente($id);
        $count = $this->mfesad->getCountClasesDocente($id);
        $datos = array(
            'consulta' => $result,
            'count' => $count,
            'clases' => $class
        );
        foreach ($result->result() as $fila){
            $destinatario = $fila->correo;
        }
        
        $html= $this->load->view('pdf/datos_docente_correo', $datos, true);
       
        //$destinatario = "felipeevilt@hotmail.com"; 
        $asunto = "FESAD - asignacion de asignaturas"; 

        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; 

        //dirección del remitente 
        $headers .= "From: FESAD <fesadtunja@gmail.com>\r\n";

        if(mail($destinatario,$asunto,$html,$headers)) {
            $this->load->view('calendario/vhorariodocente', $datos);
        }else {
            echo('No se pudo enviar');
        }
    }
}