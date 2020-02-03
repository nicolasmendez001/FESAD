<?php


class ccalendarioasignatura extends CI_Controller
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

    }
    public function horario($id){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $salones = $this->mfesad->getSalones();
        $docentes = $this->mfesad->getDocentes();
        $asignatura = $this->mfesad->getAsignatura($id);
        $datos = array(
            'salones'=>$salones,
            'docentes'=>$docentes,
            'asignatura'=>$asignatura
        );
        $this->load->view('calendario/vhorarioasignatura', $datos);
    }

    public function clases($id){

        $clases = $this->mfesad->getClasesAsignatura($id);
        echo json_encode($clases);
    }
    
    public function asignatura(){
        $s='Dayana Solano';
        $footerData['data'] = array(
            'docente' => $s
        );
        echo json_encode($footerData);
    }
    public function clase($opcion){

        $datos['datos'] = array(
            'respuesta' => 'ok'
        );
        switch ($opcion){
            case 'guardar':
                $this->mfesad->guardarClase(
                    $_POST['fk_asignatura'],
                    $_POST['fk_salon'],
                    $_POST['fk_docente'],
                    $_POST['title'],
                    $_POST['description'],
                    $_POST['color'],
                    $_POST['textColor'],
                    $_POST['start'],
                    $_POST['end'],
                    $_POST['dia_semana']
                );
                break;
            case 'eliminar':
                $this->mfesad->eliminarClase($_POST['id_clase']);
                break;
            case 'modificar':
                $this->mfesad->editarClase(
                    $_POST['id_clase'],
                    $_POST['fk_asignatura'],
                    $_POST['fk_salon'],
                    $_POST['fk_docente'],
                    $_POST['title'],
                    $_POST['description'],
                    $_POST['color'],
                    $_POST['textColor'],
                    $_POST['start'],
                    $_POST['end'],
                    $_POST['dia_semana']
                );
                break;
            default:
                break;
        }
        echo json_encode($datos);
    }

    public function validarSalon(){
        $mensaje = null;
        $clases = $this->mfesad->validarHorarioSalon($_POST['fk_salon'],$_POST['start'],$_POST['end'],$_POST['dia_semana']);
        if ($clases!=null){
            foreach($clases->result() as $fila) {
                $salon = $this->mfesad->getSalon($fila->fk_salon);
                $mensaje = $fila->title;
                foreach($salon->result() as $nom) {
                    $mensaje = $nom->nombre." - ".$mensaje;
                }
                $asignatura = $this->mfesad->getAsignatura($fila->fk_asignatura);
                foreach($asignatura->result() as $nom) {
                    $mensaje = $nom->nombre." - ".$mensaje;
                }
                $mensaje = "Se cruza el horario con ".$mensaje;
            }
        }

        echo json_encode($mensaje);
    }
    public function validarDocente(){
        $mensaje = null;
        $clases = $this->mfesad->validarHorarioDocente($_POST['fk_docente'],$_POST['start'],$_POST['end'],$_POST['dia_semana']);
        if ($clases!=null){
            foreach($clases->result() as $fila) {
                $salon = $this->mfesad->getSalon($fila->fk_salon);
                foreach($salon->result() as $nom) {
                    $mensaje = $nom->nombre;
                }
                $asignatura = $this->mfesad->getAsignatura($fila->fk_asignatura);
                foreach($asignatura->result() as $nom) {
                    $mensaje = $nom->nombre." - ".$mensaje;
                }
                $mensaje = "Docente no disponible, asignado a ".$mensaje;
            }
        }
        echo json_encode($mensaje);
    }
}