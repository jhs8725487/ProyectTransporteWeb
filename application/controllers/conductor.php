<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conductor extends CI_Controller {

    
    public function test()
    {
        $data['infoConductores'] = $this->conductor_model->lista();
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('conductores/conductores_view', $data);
        $this->load->view('incrustaciones/footer2');
    }

    public function modificar(){
        $idConductor=$_POST['idConductor'];
        $data['infoconductor']=$this->conductor_model->recuperarConductor($idConductor);

        $this->load->view('inc_head.php');  //archivos de cabeceras
        $this->load->view('est_modificar',$data); //contenido
        $this->load->view('inc_footer.php'); //archivos del pie de pagina
    }
       public function mas()
    {
            //$data['infoConductores']=$this->conductor_model->lista();
            $idConductor=$_GET['key'];
            $data['infoConductores']=$this->conductor_model->recuperarConductor($idConductor);
            $this->load->view('incrustaciones/head');
            $this->load->view('incrustaciones/menu-topnav');
            $this->load->view('incrustaciones/menu-sidenav');
            $this->load->view('conductores/conductores_ver_mas', $data);
            $this->load->view('incrustaciones/footer2');
    }


    public function modificarbd(){

        $idConductor=$_POST['idConductor'];
        $data['Nombre']=$_POST['nombre'];
        $data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
        $data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
        $data['FechaNacimiento']=$_POST['FechaNacimiento'];
        $data['Sexo']=$_POST['sexo'];
        $data['Cedula']=$_POST['cedula'];
        $data['Telefono']=$_POST['telefono'];
        $data['Correo']=$_POST['correo'];
        $this->conductor_model->modificarConductor($idConductor,$data); 
        redirect('conductor/test','refresh');
    }
    public function agregar(){
        $this->load->view('inc_head.php');  //archivos de cabeceras
        $this->load->view('est_agregar'); //contenido
        $this->load->view('inc_footer.php'); //archivos del pie de pagina
    }

    public function agregarbd(){
        $data['Nombre']=$_POST['nombre'];
        $data['ApellidoPaterno']=$_POST['ApellidoPaterno'];
        $data['ApellidoMaterno']=$_POST['ApellidoMaterno'];
        $data['FechaNacimiento']=$_POST['FechaNacimiento'];
        $data['Sexo']=$_POST['sexo'];
        $data['Cedula']=$_POST['cedula'];
        $data['Telefono']=$_POST['telefono'];
        $data['Correo']=$_POST['correo'];
        $this->conductor_model->agregarConductor($data);
        redirect('conductor/test','refresh');
    }

       public function deleteRestorebd()
    {
        $idInstituto = $_POST['idConductor'];
        $data['estado'] =  $_POST['estado'];
        $this->conductor_model->modificarConductor($idInstituto, $data);
        redirect('conductor/test','refresh');  
    }
    public function subirfoto(){
        $data['idConductor']=$_POST['idConductor'];

        $this->load->view('inc_head.php');  //archivos de cabeceras
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
}
