<?php

class Musuario extends CI_Model
{
    function __contruct()
    {
        parent::__contruct();
    }

    public function guardarUsuario($paramusu)
    {
        $campos = array (
            'nomUsuario' => $paramusu['nomUsuario'],
            'clave' => $paramusu['clave'],
            'idPersona' => $paramusu['idPersona']
        );

        $this->db->insert('usuario', $campos);
    }
}
