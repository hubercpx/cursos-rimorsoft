<?php
class Mlogin extends CI_Model
{
    public function ingresar($usu, $pass){
        $this->db->select('u.idUsuario, p.nombre, p.appaterno, p.appmaterno');
        $this->db->from('usuario u');
        $this->db->join('persona p', 'p.idPersona = u.idPersona');
        $this->db->where('u.nomUsuario', $usu);
        $this->db->where('u.clave', $pass);

        $resultado = $this->db->get();

        if($resultado->num_rows() ==1) {
            $r = $resultado->row();//lo que hace row es tomar el registro en si

            $s_usuario = array(
                's_idUsuario' => $r -> idUsuario,
                's_usuario' => $r -> nombre.", ".$r -> appaterno
            );

            $this->session->set_userdata($s_usuario);

            //NOTA: el tiempo de sesion se puede configurar en el archivo config.php en la variable sess_expiration o con $this->session->set_flashdata('asss');
            //tambien se puede hacer de esta manera
            //$this->session->userdata('s_idUsuario', $r->idUsuario);
            //$this->session->userdata('s_usuario', $r->nombre.", ".$r->appaterno);

            return 1;
        }
        else{
            return 0;
        }
    }
    /*CONSULTA
        select u.idUsuario, p.nombre,p.appaterno,p.txtApMaterno
        form usuario u
        inner join persona p on p.idPerson = u.idPersona
        where u.nomUsuario = 'hubercpx' and u.clave = '123456'
        */
}
