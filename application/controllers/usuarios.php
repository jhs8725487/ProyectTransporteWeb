<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {




    public function test()
    {

        $data['infoUsuarios'] = $this->usuario_model->lista();
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('usuarios/usuarios_view2', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function testAdmin()
    {
        $data2['msg'] = $this->uri->segment(3);
        $data['infoUsuarios'] = $this->usuario_model->lista();
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('usuarios/usuarios_view', $data);
        $this->load->view('incrustaciones/footer', $data2);
    }
   
    Public function listapdf()
    {
        $lista=$this->usuario_model->lista();
        $lista=$lista->result();

        $this->pdf=new Pdf();
        $this->pdf-> AddPage();
        $this->pdf-> AliasNbPages();
        $this->pdf-> SetTitle("Lista de usuarios");
        $this->pdf-> SetLeftMargin(15);
        $this->pdf-> SetRightMargin(15);
        $this->pdf-> SetFillColor(210,210,210);
        $this->pdf-> SetFont('Arial','B',8);
        $this->pdf-> Cell(30);
        $this->pdf-> Cell(120,10,'LISTA DE USUARIOS',0,0,'C',1);
        $this->pdf->Ln(20);

        $this->pdf->Cell(7,5,'No','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'NOMBRE','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'APELLIDO PATERNO','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'APELLIDO MATERNO','TLBR',0,'L',1);
        $this->pdf->Cell(10,5,'SEXO','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'TELEFONO','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'CEDULA','TLBR',0,'L',1);
        $this->pdf->Cell(42,5,'CORREO','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'ROL','TLBR',0,'L',1);
        $this->pdf->Ln(5);

        $this->pdf-> SetFont('Arial','',8);
       
        $num=1;
        foreach ($lista as $row) {
            $Nombre=$row->Nombre;
            $ApellidoPaterno=$row->ApellidoPaterno;
            $ApellidoMaterno=$row->ApellidoMaterno;
            $Sexo=$row->Sexo;
            $Telefono=$row->Telefono;
            $Cedula=$row->Cedula;
            $Correo=$row->Correo;
            $Rol=$row->Rol;
            $this->pdf->Cell(7,5,$num,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Nombre,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$ApellidoPaterno,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$ApellidoMaterno,'TLBR',0,'L',0);
            $this->pdf->Cell(10,5,$Sexo,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Telefono,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Cedula,'TLBR',0,'L',0);
            $this->pdf->Cell(42,5,$Correo,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Rol,'TLBR',0,'L',0);
            $this->pdf->Ln(5);
            $num++;
        }
         $this->pdf->Output("listausuarios.pdf",'I');
    }
    public function deleteRestorebd()
    {
        $idUsuario = $_POST['idUsuario'];
        $data['estado'] =  $_POST['estado'];
        $this->usuario_model->modificarUsuario($idUsuario, $data);
        redirect('usuarios/testAdmin','refresh');  
    }
    public function subirfoto(){
        $data['idUsuario']=$_POST['idUsuario'];

       // $this->load->view('incrustaciones/head');
        //$this->load->view('incrustaciones/menu-topnav');
        //$this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('usuarios/subirform',$data); //contenido
        //$this->load->view('incrustaciones/footer');
    }
    public function subir(){
        $idUsuario=$_POST['idUsuario'];
        $nombrearchivo=$idUsuario.".jpg";
        //ruta donde se guardan los ficheros
        $config['upload_path']='./uploads/usuarios/';
        //Nombre del archivo
        $config['file_name']=$nombrearchivo;

        //reemplazar los archivos
        $direccion="./uploads/usuarios/".$nombrearchivo;
        unlink($direccion);
        
        //tipos de archivos permitidos
        $config['allowed_types']='jpg'; //'gif|jpg|png'
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload()){
            //si hay algun error pasaremos la vista
            $data['error']=$this->upload->display_errors();
        }else{
            $data['foto']=$nombrearchivo;
            $this->usuario_model->modificarUsuario($idUsuario,$data);
            $this->upload->data(); 
        }
       redirect('usuarios/testAdmin','refresh');
    }

	public function index()
	{
        $data['msg']=$this->uri->segment(3);
        if($this->session->userdata('NombreUsuario'))
        {
            redirect('usuarios/panel','refresh');

        }
        else{
            //cargar un login form
            //$this->load->view('inc_head.php');	//archivos de cabeceras
		    $this->load->view('login/vlogin',$data); //contenido
		    //$this->load->view('inc_footer.php'); //archivos del pie de pagina*/

        }
	}
  
    public function agregarbd(){
        
        $username=UsuarioPassword($_POST['Telefono'],$_POST['Nombre'],$_POST['ApellidoPaterno'],$_POST['ApellidoMaterno']);
        $Consulta = $this->usuario_model->validarid($username);
        if($Consulta->num_rows()>0){
           redirect('usuarios/testAdmin/1','refresh');
        }else{
            $data['Nombre']=$_POST['Nombre'];
            $data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
            $data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
            $data['Sexo']=$_POST['Sexo'];
            $data['Telefono']=$_POST['Telefono'];
            $data['Rol']=$_POST['Rol'];
            $data['Correo']=$_POST['Correo'];
            $data['usu_usuario']=$username;
            $data['usu_password']=md5($username);
            $this->usuario_model->agregarUsuario($data);
        }
        $this->load->library("email");

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '60';
    
        $config['smtp_user']    = 'jhericoo8322@gmail.com';    //Important
        $config['smtp_pass']    = 'damepose003';  //Important
    
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not 
        //Establecemos esta configuración
        $this->email->initialize($config);

        
        $correo=$_POST['Correo'];
        
        //$from_email="jhericoo8322@gmail.com";
        //$to_email="simoneaquino8322@gmail.com";
        $this->email->from('jhericoo8322@gmail.com','Joel Herrera');
        $this->email->to('simoneaquino8322@gmail.com','Simone Aquino');
        $this->email->to($correo,'Simone Aquino');
        $this->email->subject("Cuenta de usuario");
        //$this->email->message("Test Message");
        $this->email->message("Tu usuario es: ".$username." y tu  contraseña es: ".$username);
        if($this->email->send()){
            //$this->session->set_flashdata('envio','Email enviado correctamente');
            $this->session->set_flashdata('envio','La cuenta de acceso se ha enviado al email');
        }else{
            $this->session->set_flashdata('envio','No se a enviado el email');
        }
		//redirect('usuarios/testAdmin','refresh');
        redirect('usuarios/testAdmin/0','refresh');
	}

	public function agregar(){
		$this->load->view('inc_head.php');	//archivos de cabeceras
		$this->load->view('est_agregar3'); //contenido
		$this->load->view('inc_footer.php'); //archivos del pie de pagina
	}

	public function validarusuario(){
        $Correo=$_POST['Correo'];
        $password=md5($_POST['password']);
        $consulta=$this->usuario_model->validar($Correo,$password);
        
        if($consulta->num_rows()>0)
        {
            foreach($consulta->result() as $row)
            {
                //crear las variables de session
                $this->session->set_userdata('idusuario',$row->idUsuario);
                $this->session->set_userdata('Correo',$row->Correo);
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
        if($this->session->userdata('Correo'))
        {
            if($this->session->userdata('Rol')=='Administrador')
            {
                redirect('usuarios/testAdmin','refresh');
            }
            else
            {
                redirect('usuarios/test','refresh');
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
        $passname=$_POST['usu_password'];
		$idUsuario=$_POST['idUsuario'];
		$data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
        $data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
		$data['Nombre']=$_POST['Nombre'];
		$data['Sexo']=$_POST['Sexo'];
        $data['Telefono']=$_POST['Telefono'];
        $data['Rol']=$_POST['Rol'];
        $data['Correo']=$_POST['Correo'];
        $data['usu_password']=md5($passname);
        $file=$_POST['userfile'];
        if($file!=""){
        $nombrearchivo=$idUsuario.".jpg";
        //ruta donde se guardan los archivos
        $config['upload_path']='./uploads/usuarios/';
        //Nombre del archivo
        $config['file_name']=$nombrearchivo;
        //reemplazar los archivos
        $direccion="./uploads/usuarios/".$nombrearchivo;
        //Esto borra lo que haya en esa direccion
        unlink($direccion);
        //tipos de archivos permitidos
        $config['allowed_types']='jpg';   //'gif|jpg|png';
        $this->load->library('upload',$config);

        if(!$this->upload->do_upload()){
        //si hay algun error pasaremos la vista
            $data['error']=$this->upload->display_errors();
        }else{
            $data['foto']=$nombrearchivo;
            $this->usuario_model->modificarUsuario($idysuario,$data);
            $this->upload->data(); 
        }
    }else{
		$this->usuario_model->modificarUsuario($idUsuario,$data); 	
        }
        redirect('usuarios/testAdmin','refresh');
	}


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('usuarios/index/3','refresh');

    }
}