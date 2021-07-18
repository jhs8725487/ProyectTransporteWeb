<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function index()
	{
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('NombreUsuario'))
        {
            redirect('usuarios/panel','refresh');

        }
        else{
            //cargar un login form
            $this->load->view('inc_head.php');	//archivos de cabeceras
		    $this->load->view('loginform',$data); //contenido
		    $this->load->view('inc_footer.php'); //archivos del pie de pagina*/

        }
	}
    public function agregarbd(){
        $username=UsuarioPassword($_POST['Cedula'],$_POST['Nombre'],$_POST['ApellidoPaterno'],$_POST['ApellidoMaterno']);
		$data['Nombre']=$_POST['Nombre'];
		$data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
		$data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
        $data['FechaNacimiento']=$_POST['FechaNacimiento'];
		$data['Sexo']=$_POST['Sexo'];
		$data['Cedula']=$_POST['Cedula'];
		$data['Rol']=$_POST['Rol'];
        $data['NombreUsuario']=$username;
        $data['password']=md5($username);
		$this->usuario_model->agregarUsuario($data);
		redirect('conductor/test','refresh');
	}


    public function DarBaja(){
        $idUsuario=$_POST['idUsuario']; //redireccion
        $data['Estado']='0';
		$this->usuario_model->bajaUsuario($idUsuario,$data);//proceso de eliminacion
 		redirect('conductor/test','refresh');	//actualizacion
    }
    public function DarAlta(){
        $idUsuario=$_POST['idUsuario']; //redireccion
        $data['Estado']='1';
		$this->usuario_model->altaUsuario($idUsuario,$data);//proceso de eliminacion
 		redirect('conductor/test','refresh');	//actualizacion
    }

	public function agregar(){
		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_agregar3'); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function validarusuario(){
        $NombreUsuario=$_POST['NombreUsuario'];
        $password=md5($_POST['password']);
        $consulta=$this->usuario_model->validar($NombreUsuario,$password);
        
        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $row)
            {
                //crear las variables de session
                $this->session->set_userdata('idusuario',$row->idUsuario);
                $this->session->set_userdata('NombreUsuario',$row->NombreUsuario);
                $this->session->set_userdata('Rol',$row->Rol);
                redirect('usuarios/panel','refresh');
            }
        }
        else{
            //sino redirigimos al index enviando 1 en el urisegment 3
            redirect('usuarios/index/1','refresh');
        }
    }
    public function panel()
    {
        if($this->session->userdata('NombreUsuario'))
        {
            if($this->session->userdata('Rol')=='Administrador')
            {
                redirect('conductor/test','refresh');
            }
            else
            {
                redirect('conductor/test2','refresh');
            }
        }
        else{
               //sino redirigimos al index enviando 2 en el urisegment 3
               redirect('usuarios/index/2','refresh');

        }



    }
    public function ModificarUsuario(){
		$idUsuario=$_POST['idUsuario'];
		$data['infousuario']=$this->usuario_model->recuperarUsuario($idUsuario);

		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_modificar3',$data); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}
    
	public function modificarbd(){
        $passname=$_POST['password'];
		$idUsuario=$_POST['idUsuario'];
		$data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
		$data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
		$data['Nombre']=$_POST['Nombre'];
		$data['FechaNacimiento']=$_POST['FechaNacimiento'];
		$data['Sexo']=$_POST['Sexo'];
        $data['password']=md5($passname);
		$this->usuario_model->modificarUsuario($idUsuario,$data); 

		redirect('conductor/test2','refresh');
	}


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index/3','refresh');

    }
}
