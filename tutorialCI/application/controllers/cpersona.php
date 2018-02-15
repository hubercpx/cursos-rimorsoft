<?php

class Cpersona extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mpersona');
        $this->load->model('musuario');
        $this->load->library('encrypt');
    }

    public function index()
    {
        $this->load->view('persona/vpersona');
    }

    public function guardar()
    {
        //persona
        $param['dni']           = $this->input->post('txtDNI');
        $param['nombre']        = $this->input->post('txtNombre');
        $param['appaterno']     = $this->input->post('txtApPaterno');
        $param['appmaterno']    = $this->input->post('txtApMaterno');
        $param['email']         = $this->input->post('txtEmail');
        $param['fecnac']        = $this->input->post('DatFecNac');
        //usuario
        $paramusu['nomUsuario'] = $this->input->post('txtUsuario');
        $paramusu['clave']      = sha1($this->input->post('txtClave'));

        $lastId = $this->mpersona->guardar($param);

        if ($lastId > 0) {
            $paramusu['idPersona'] = $lastId;
            $this->musuario->guardarUsuario($paramusu);
        }

    }
}
