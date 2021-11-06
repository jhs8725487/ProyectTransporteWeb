<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transporte_model extends CI_ModeL {

    

    public function lista()
    {
        $this->db->select('*');
        $this->db->from('transportes');
        return $this->db->get();
    }
    
    public function recuperarTransporte($idTransporte)
    {
        $this->db->select('*');
        $this->db->from('vwtransportes');
        $this->db->where('idTransporte',$idTransporte);
        return $this->db->get();

    }

    public function recuperarTransporte2($idTransporte)
    {
        $this->db->select('*');
        $this->db->from('vwtransportes');
        $this->db->where('idConductor',$idTransporte);
        return $this->db->get();

    }
    public function modificarTransporte($idTransporte,$data)
    {
        $this->db->where('idTransporte',$idTransporte);
        $this->db->update('transportes',$data);
    }
    public function agregarTransporte($data)
    {
        $this->db->insert('transportes',$data);
    }

    

    
        


    
}
