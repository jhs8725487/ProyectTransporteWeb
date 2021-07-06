<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {

	
	public function test()
	{
        $lista=$this->conductor_model->lista();
		$lista2=$this->conductor_model->lista2();
        $data['conductores']=$lista;
        $data['transportes']=$lista2;


		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('inc_menu.php');	//archivos de cabeceras
		$this->load->view('test',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}
	public function modificar(){
		$idConductor=$_POST['idConductor'];
		$data['infoconductor']=$this->conductor_model->recuperarConductor($idConductor);

		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_modificar',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function modificar2(){
		$idTransporte=$_POST['idTransporte'];
		$data['infotransporte']=$this->conductor_model->recuperarTransporte($idTransporte);

		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_modificar2',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function modificarbd(){
		$idConductor=$_POST['idConductor'];
		$data['Nombre']=$_POST['nombre'];
		$data['ApellidoPaterno']=$_POST['primerApellido'];
		$data['ApellidoMaterno']=$_POST['segundoApellido'];
		$data['Telefono']=$_POST['telefono'];
		$data['Correo']=$_POST['correo'];
		$this->conductor_model->modificarConductor($idConductor,$data); 

		redirect('conductor/test','refresh');
	}
	public function modificarbd2(){
		$idConductor=$_POST['idTransporte'];
		$data['Tipo']=$_POST['tipo'];
		$data['Color']=$_POST['color'];
		$data['NumeroPlaca']=$_POST['placa'];
		$data['Marca']=$_POST['marca'];
		$data['Modelo']=$_POST['modelo'];
		$this->conductor_model->modificarTransporte($idConductor,$data); 

		redirect('conductor/test','refresh');
	}
	public function agregar(){
		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_agregar'); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function agregar2(){
		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_agregar2'); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function agregarbd(){
		$data['Nombre']=$_POST['nombre'];
		$data['ApellidoPaterno']=$_POST['primerApellido'];
		$data['ApellidoMaterno']=$_POST['segundoApellido'];
		$data['Cedula']=$_POST['cedula'];
		$data['Edad']=$_POST['edad'];
		$data['Telefono']=$_POST['telefono'];
		$data['Correo']=$_POST['correo'];
		$this->conductor_model->agregarConductor($data);
		redirect('conductor/test','refresh');
	}

	public function agregarbd2(){
		$data['Tipo']=$_POST['tipo'];
		$data['Color']=$_POST['color'];
		$data['NumeroPlaca']=$_POST['placa'];
		$data['Marca']=$_POST['marca'];
		$data['Modelo']=$_POST['modelo'];
		$this->conductor_model->agregarTransporte($data);
		redirect('conductor/test','refresh');
	}

	public function eliminarbd(){
		$idConductor=$_POST['idConductor']; //redireccion
		$this->conductor_model->eliminarConductor($idConductor);//proceso de eliminacion
		redirect('conductor/test','refresh');	//actualizacion
	}

	public function eliminarbd2(){
		$idTransporte=$_POST['idTransporte']; //redireccion
		$this->conductor_model->eliminarTransporte($idTransporte);//proceso de eliminacion
		redirect('conductor/test','refresh');	//actualizacion
	}
}
