<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor_model extends CI_ModeL {

	
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('conductores');
        return $this->db->get();
	}

        public function lista2()
	{
        $this->db->select('*');
        $this->db->from('transportes');
        return $this->db->get();
	}

        public function recuperarConductor($idConductor)
	{
        $this->db->select('*');
        $this->db->from('conductores');
        $this->db->where('idConductor',$idConductor);
        return $this->db->get();
	}

        public function recuperarTransporte($idTransporte)
	{
        $this->db->select('*');
        $this->db->from('transportes');
        $this->db->where('idTransporte',$idTransporte);
        return $this->db->get();

	}

        public function modificarConductor($idConductor,$data)
	{
        $this->db->where('idConductor',$idConductor);
        $this->db->update('conductores',$data);
	}

        public function modificarTransporte($idTransporte,$data)
	{
        $this->db->where('idTransporte',$idTransporte);
        $this->db->update('transportes',$data);
	}

        public function agregarConductor($data)
	{
        $this->db->insert('conductores',$data);
	}

        public function agregarTransporte($data)
	{
        $this->db->insert('transportes',$data);
	}

        public function eliminarConductor($idConductor)
	{
        $this->db->where('idConductor',$idConductor);
        $this->db->delete('conductores');
	}

        public function eliminarTransporte($idTransporte)
	{
        $this->db->where('idTransporte',$idTransporte);
        $this->db->delete('transportes');
	}
        


	
}
