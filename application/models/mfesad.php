<?php
class mfesad extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();

    }

    public function login($nombre,$contra)
    {
        $this->db->where('nombre',$nombre);
        $this->db->where('contrasena',$contra);
        $q = $this->db->get('usuario');
        if ($q->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    /*------------------------Programa---------------------------------*/
    public function getProgramas(){
        $data = $this->db->get('programa');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function getPrograma($id){
        $this->db->where('id_programa',$id);
        $data = $this->db->get('programa');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function guardarPrograma($nombre, $semestres){
        $data = array(
            'nombre' => $nombre,
            'semestres' => $semestres
        );
        $this->db->insert('programa',$data);
    }
    /*------------------------Periodo---------------------------------*/
    public function getPeriodos(){
        $data = $this->db->get('periodo');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function getPeriodosPrograma($id){
        $this->db->where('fk_programa',$id);
        $data = $this->db->get('periodo');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function guardarPeriodo($anio, $semestre){
        $data = array(
            'fk_programa' => 0,
            'anio' => $anio,
            'semestre' => $semestre
        );
        $this->db->insert('periodo',$data);
    }
    /*------------------------Asignaturas---------------------------------*/
    public function getAsignatura($id){
        $this->db->where('id_asignatura',$id);
        $data = $this->db->get('asignatura');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

    public function eliminarAsignatura($id){
        $this->db->delete('asignatura', array('id_asignatura' => $id));
    }

    public function eliminarPeriodo($id){
        $this->db->delete('periodo', array('id_periodo' => $id));
    }

    public function getAsignaturas(){
        $data = $this->db->get('asignatura');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }

    public function getAsignaturasPrograma($id_programa,$id_periodo){
        $this->db->where('fk_programa',$id_programa);
        $this->db->where('fk_periodo',$id_periodo);
        $this->db->order_by("semestre", "asc");
        $data = $this->db->get('asignatura');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function guardarAsignatura($fk_programa, $fk_periodo, $nombre,$creditos, $semestre){
        $data = array(
            'fk_programa' => $fk_programa,
            'fk_periodo' => $fk_periodo,
            'nombre' => $nombre,
            'creditos' => $creditos,
            'semestre' => $semestre
        );
        $this->db->insert('asignatura',$data);
    }

    /*------------------------Salones---------------------------------*/
    public function getSalones(){
        $data = $this->db->get('salon');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function getSalon($id){
        $this->db->where('id_salon',$id);
        $data = $this->db->get('salon');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function guardarSalon($nom,$ubica){
        $data = array(
            'nombre' => $nom,
            'ubicacion' => $ubica
        );
        $this->db->insert('salon',$data);
    }
    public function eliminarSalon($id){
        $this->db->delete('salon', array('id_salon' => $id));

    }
    public function getClasesSalon($id){
        $data = $this->db->query("SELECT clase.id_clase, asignatura.nombre AS asignatura, clase.title, clase.description, clase.color, clase.textColor, clase.start, clase.end FROM clase INNER JOIN asignatura ON clase.fk_asignatura=asignatura.id_asignatura WHERE clase.fk_salon=$id");
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return FALSE;
        }
    }
    /*------------------------Clases---------------------------------*/
    public function getClases(){
        $data = $this->db->get('clase');
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return FALSE;
        }
    }
    public function getClasesAsignatura($id){
        $this->db->where('fk_asignatura', $id);
        $data = $this->db->get('clase');
        if ($data->num_rows() > 0) {
            return $data->result_array();
        } else {
            return FALSE;
        }
    }
    public function guardarClase($asig,$sal,$doc,$title,$desc,$color,$text,$start,$end){
        $data = array(
            'fk_asignatura' => $asig,
            'fk_salon' => $sal,
            'fk_docente' => $doc,
            'title' => $title,
            'description' => $desc,
            'color' => $color,
            'textColor' => $text,
            'start' => $start,
            'end' => $end
        );
        $this->db->insert('clase',$data);
    }
    public function eliminarClase($id){
        $this->db->delete('clase', array('id_clase' => $id));

    }
    public function editarClase($id,$asig,$sal,$doc,$title,$desc,$color,$text,$start,$end){
        $this->db->where('id_clase', $id);
        $this->db->set('fk_asignatura', $asig);
        $this->db->set('fk_salon', $sal);
        $this->db->set('fk_docente', $doc);
        $this->db->set('title', $title);
        $this->db->set('description', $desc);
        $this->db->set('color', $color);
        $this->db->set('textColor', $text);
        $this->db->set('start', $start);
        $this->db->set('end', $end);
        return $this->db->update('clase');
    }
    /*------------------------Docente---------------------------------*/
    public function getDocentes(){
        $data = $this->db->get('docente');
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function getDocente($id){
        $this->db->where('id_docente',$id);
        $q = $this->db->get('docente');
        if ($q->num_rows()>0){
            return $q;
        }else{
            return null;
        }
    }
    public function guardarDocente($nom,$corr,$tel){
        $data = array(
            'nombre' => $nom,
            'correo' => $corr,
            'telefono' => $tel
        );
        $this->db->insert('docente',$data);
    }
    public function editarDocente($id,$nom,$corr,$tel){
        $this->db->where('id_docente', $id);
        $this->db->set('nombre', $nom);
        $this->db->set('correo', $corr);
        $this->db->set('telefono', $tel);
        return $this->db->update('docente');
    }
    public function eliminarDocente($id){
        $this->db->delete('docente', array('id_docente' => $id));
    }
    public function getClasesDocente($id){
        $data = $this->db->query("SELECT clase.id_clase, asignatura.nombre AS asignatura, asignatura.semestre AS semestre, salon.nombre AS salon, clase.title, clase.description, clase.color, clase.textColor, clase.start, clase.end FROM clase INNER JOIN asignatura ON clase.fk_asignatura=asignatura.id_asignatura INNER JOIN salon ON clase.fk_salon = salon.id_salon WHERE clase.fk_docente=$id ORDER BY asignatura");
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    public function getCountClasesDocente($id){
        $data = $this->db->query("SELECT asignatura.id_asignatura, COUNT(asignatura.nombre) AS cantidad, asignatura.nombre AS asignatura, asignatura.semestre AS semestre, programa.nombre AS programa FROM clase INNER JOIN asignatura ON clase.fk_asignatura=asignatura.id_asignatura INNER JOIN salon ON clase.fk_salon = salon.id_salon INNER JOIN programa ON asignatura.fk_programa = programa.id_programa WHERE clase.fk_docente=$id GROUP BY asignatura");
        if ($data->num_rows() > 0) {
            return $data;
        } else {
            return FALSE;
        }
    }
    /*------------------------Validaciones---------------------------------*/
    //SELECT * FROM `clase` WHERE ('2019-01-30 09:00:00' BETWEEN `start` AND `end`) OR ('2019-01-30 10:21:00' BETWEEN `start` AND `end`) AND fk_salon =2
    public function validarHorarioSalon($id_salon, $fechaini, $fechafin){
//        $this->db->where("(".$fechaini." BETWEEN start AND end)");

//        $this->db->where("(".$fechaini." BETWEEN start AND end) OR (".$fechafin." BETWEEN start AND end) AND fk_salon=".$id_salon);
        $q = $this->db->query("SELECT * FROM clase WHERE ((start BETWEEN '$fechaini' AND '$fechafin') OR (end BETWEEN '$fechaini' AND '$fechafin')) AND fk_salon=$id_salon");
        if ($q->num_rows()>0){
            return $q;
        }else{
            return null;
        }
    }
    public function validarHorarioDocente($id_docente, $fechaini, $fechafin){
        $q = $this->db->query("SELECT * FROM clase WHERE ((start BETWEEN '$fechaini' AND '$fechafin') OR (end BETWEEN '$fechaini' AND '$fechafin')) AND fk_docente=$id_docente");
        if ($q->num_rows()>0){
            return $q;
        }else{
            return null;
        }
    }

}