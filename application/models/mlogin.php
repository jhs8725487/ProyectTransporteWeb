<?php
class Mlogin extends CI_Model{
    public function ingresar($usu,$pass){
        $this->db->select('u.ci','u.username','u.tipo');
        $this->db->from('usuario u');
        $this->db->where('username',$usu);
        $this->db->where('password',$pass);

        $resultado= $this->db->get();

        if($resultado->num_rows==1){
            $r=$resultado->$row();

            $s_usuario=array(
               's_ci'=>$r->ci,
                's_usuario'=>$r->username.",".$r->tipo
            );
            $this->session->userdata($s_usuario);

            //$this->session->userdata('s_ci',$r->ci);
            //$this->session->userdata('s_usuario', $r->username.",".$r->tipo);
            
            return 1;
        }else{
            return 0;
        }
    }
}
?>