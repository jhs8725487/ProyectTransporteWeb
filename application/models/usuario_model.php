<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_ModeL {

   
    public function lista()
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            return $this->db->get();
        }
        public function validar($Correo,$password)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('Correo',$Correo);
        $this->db->where('usu_password',$password);
        $this->db->where('Estado','1');
        return $this->db->get();
    }
    
    public function agregarUsuario($data)
	{
        $this->db->insert('usuarios',$data);
	}

    public function recuperarUsuario($idUsuario)
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('idUsuario',$idUsuario);
            return $this->db->get();

        }

    public function modificarUsuario($idUsuario,$data)
        {
        $this->db->where('idUsuario',$idUsuario);
        $this->db->update('usuarios',$data);
        }


        


    
}
