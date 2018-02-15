<?php



class Clogin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
    }

    public function index(){
        $this->load->view('vlogin');
    }

    public function ingresar()
    {
        $usu = $this->input->post('txtUsuario');
        $pass = sha1($this->input->post('txtClave'));

        $res = $this->mlogin->ingresar($usu,$pass);

        if ($res == 1)
        {
            $this->load->view('persona/vupdpersona');
        }
        else
        {
            $this->load->view('vlogin');
        }
    }
}
