<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor_model extends CI_ModeL {

    
    public function lista()
    {
        $this->db->select('*');
        $this->db->from('conductores');
        return $this->db->get();
    }


    public function recuperarConductor($idConductor)
    {
        $this->db->select('*');
        $this->db->from('conductores');
        $this->db->where('idConductor',$idConductor);
        return $this->db->get();
    }

    public function modificarConductor($idConductor,$data)
    {
        $this->db->where('idConductor',$idConductor);
        $this->db->update('conductores',$data);
    }


    public function agregarConductor($data)
    {
        $this->db->insert('conductores',$data);
    }
    
}
