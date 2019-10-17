<?php

class ccalendario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    public function index(){
        if (!$this->session->userdata('username')){
            redirect('clogin');
        }
        $this->load->view('calendario/index');

    }
    public function eventos(){
        $eventos = array(
            array(
                'id'=> 1,
                'title'=> 'Titulo uno',
                'description'=> 'Mi primera descripcion',
                'color'=> '#FF5B33',
                'start'=> '2019-01-29T10:00:00',
                'end'=> '2019-01-29T12:00:00'
            ),
            array(
                'id'=> 1,
                'title'=> 'Titulo dos',
                'description'=> 'Mi segunda descripcion',
                'color'=> '#FF5B33',
                'start'=> '2019-01-30T10:00:00',
                'end'=> '2019-01-30T12:00:00'
            )
        );
        echo json_encode($eventos);
    }

    }