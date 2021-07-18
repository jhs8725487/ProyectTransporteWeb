<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {

	
	public function test()
	{
        $lista=$this->conductor_model->lista();
		$lista2=$this->conductor_model->lista2();
		$lista3=$this->conductor_model->lista3();
        $data['conductores']=$lista;
        $data['transportes']=$lista2;
		$data['usuarios']=$lista3;


		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('inc_menu.php');	//archivos de cabeceras
		$this->load->view('test',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}
	public function test2()
	{
        $lista=$this->conductor_model->lista();
		$lista2=$this->conductor_model->lista2();
		$lista3=$this->conductor_model->lista3();
        $data['conductores']=$lista;
        $data['transportes']=$lista2;
		$data['usuarios']=$lista3;


		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('inc_menu.php');	//archivos de cabeceras
		$this->load->view('test2',$data); //contenido
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
		$idTransporte=$_POST['idTransporte'];
		$data['Tipo']=$_POST['tipo'];
		$data['Color']=$_POST['color'];
		$data['NumeroPlaca']=$_POST['placa'];
		$data['Marca']=$_POST['marca'];
		$data['Modelo']=$_POST['modelo'];
		$this->conductor_model->modificarTransporte($idTransporte,$data); 

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
	public function subirfoto(){
		$data['idConductor']=$_POST['idConductor'];

		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('subirform',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}
	public function subir(){
		$idConductor=$_POST['idConductor'];
		$nombrearchivo=$idConductor.".jpg";
		//ruta donde se guardan los ficheros
		$config['upload_path']='./uploads/conductores/';
		//Nombre del archivo
		$config['file_name']=$nombrearchivo;

		//reemplazar los archivos
		$direccion="./uploads/conductores/".$nombrearchivo;
		unlink($direccion);
		
		//tipos de archivos permitidos
		$config['allowed_types']='jpg'; //'gif|jpg|png'
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload()){
			//si hay algun error pasaremos la vista
			$data['error']=$this->upload->display_errors();
		}else{
			$data['foto']=$nombrearchivo;
			$this->conductor_model->modificarConductor($idConductor,$data);
			$this->upload->data(); 
		}
		redirect('conductor/test','refresh');
	}
	public function subirfoto2(){
		$data['idTransporte']=$_POST['idTransporte'];

		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('subir2form',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function subir2(){
		$idTransporte=$_POST['idTransporte'];
		$nombrearchivo=$idTransporte.".jpg";
		//ruta donde se guardan los ficheros
		$config['upload_path']='./uploads/transportes/';
		//Nombre del archivo
		$config['file_name']=$nombrearchivo;

		//reemplazar los archivos
		$direccion="./uploads/transportes/".$nombrearchivo;
		unlink($direccion);
		
		//tipos de archivos permitidos
		$config['allowed_types']='jpg'; //'gif|jpg|png'
		$this->load->library('upload',$config);

		if(!$this->upload->do_upload()){
			//si hay algun error pasaremos la vista
			$data['error']=$this->upload->display_errors();
		}else{
			$data['foto']=$nombrearchivo;
			$this->conductor_model->modificarTransporte($idTransporte,$data); 
			$this->upload->data(); 
		}
		redirect('conductor/test','refresh');
	}
}
