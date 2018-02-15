<?php

class Mpersona extends CI_Model
{
    function __contruct()
    {
        parent::__contruct();
    }

    public function guardar($param)
    {
        $campos = array (
            'dni' => $param['dni'],
            'nombre' => $param['nombre'],
            'appaterno' => $param['appaterno'],
            'appmaterno' => $param['appmaterno'],
            'email' => $param['email'],
            'fecnac' => date('Y-m-d', strtotime(str_replace('/','-',$param['fecnac'])))
        );

        $this->db->insert('persona', $campos);

        return $this->db->insert_id();
    }
}
