<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
		public function __construct()
		{
		parent::__construct();
		$this->load->library('session');
		}

		public function Index(){
		$this->load->view('welcome_message'); //contenido

		}
		public function perfil()
		{

		//$lista = $this->autoridades_model->getAutoridades();
		//$data['infoAutoridades'] = $lista;
		//lert['msgUsuario'] = $this->uri->segment(3);
		$data['infoUsuario'] = $this->login_model->datosUsuario($this->session->userdata('idusuario'));

		//$notific['infoResolucionesTop'] = $this->resoluciones_model->getResoluciones();
		$this->load->view('incrustaciones/head');
		$this->load->view('incrustaciones/menu-topnav');
		$this->load->view('incrustaciones/menu-sidenav');
		$this->load->view('login/perfil_view', $data);
		$this->load->view('incrustaciones/footer2');

		}

		public function restablecerPS()
		{
			$username=UsuarioPassword($_POST['Cedula'],$_POST['Nombre'],$_POST['ApellidoPaterno'],$_POST['ApellidoMaterno']);
			$idUsuario=$_POST['idUsuario'];
			$data['usu_usuario']=$username;
			$data['usu_password']=md5($username);
			$this->usuario_model->modificarUsuario($idUsuario,$data); 	
			redirect('usuarios/testAdmin','refresh');
		}
}