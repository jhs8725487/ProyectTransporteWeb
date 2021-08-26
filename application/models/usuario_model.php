<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_ModeL {

	
	public function validar($NombreUsuario,$password)
	{
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('NombreUsuario',$NombreUsuario);
        $this->db->where('password',$password);
        $this->db->where('Estado','1');
        return $this->db->get();
	}

        public function agregarUsuario($data)
	{
        $this->db->insert('usuario',$data);
	}
        public function recuperarUsuario($idUsuario)
	{
        $this->db->select('*');
        $this->db->from('usuario');
        $this->db->where('idUsuario',$idUsuario);
        return $this->db->get();
	}

        public function bajaUsuario($idUsuario,$data)
	{
                $this->db->where('idUsuario',$idUsuario);
                $this->db->update('usuario',$data);
     
	}

        public function altaUsuario($idUsuario,$data)
	{
                $this->db->where('idUsuario',$idUsuario);
                $this->db->update('usuario',$data);
     	}
             
        public function modificarUsuario($idUsuario,$data)
	{
        $this->db->where('idUsuario',$idUsuario);
        $this->db->update('usuario',$data);
	}

    
}
