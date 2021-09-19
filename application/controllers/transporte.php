<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transporte extends CI_Controller {

    
   

   
    public function test()
    {
        $data['infoTransportes'] = $this->transporte_model->lista();
        if($this->session->userdata('Rol')=='Administrador'){
            $this->load->view('incrustaciones/head');
            $this->load->view('incrustaciones/menu-topnav');
            $this->load->view('incrustaciones/menu-sidenav');
            $this->load->view('transportes/transportes_view', $data);
            $this->load->view('incrustaciones/footer2');
        }else{
            $this->load->view('incrustaciones/head');
            $this->load->view('incrustaciones/menu-topnav');
            $this->load->view('incrustaciones/menu-sidenav');
            $this->load->view('transportes/transportes_view2', $data);
            $this->load->view('incrustaciones/footer2');
        }
 
    }
     Public function listapdf()
    {
        $lista=$this->transporte_model->lista();
        $lista=$lista->result();

        $this->pdf=new Pdf();
        $this->pdf-> AddPage();
        $this->pdf-> AliasNbPages();
        $this->pdf-> SetTitle("LISTADO DE TRANSPORTES");
        $this->pdf-> SetLeftMargin(15);
        $this->pdf-> SetRightMargin(15);
        $this->pdf-> SetFillColor(210,210,210);
        $this->pdf-> SetFont('Arial','B',8);
        $this->pdf-> Cell(30);
        $this->pdf-> Cell(120,10,'LISTADO DE TRANSPORTES',0,0,'C',1);
        $this->pdf->Ln(20);

        $this->pdf->Cell(7,5,'No','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'TIPO','TLBR',0,'L',1);
        $this->pdf->Cell(20,5,'COLOR','TLBR',0,'L',1);
        $this->pdf->Cell(25,5,'NUMERO PLACA','TLBR',0,'L',1);
        $this->pdf->Cell(15,5,'MARCA','TLBR',0,'L',1);
        $this->pdf->Cell(18,5,'MODELO','TLBR',0,'L',1);
        $this->pdf->Cell(25,5,'FECHA INGRESO','TLBR',0,'L',1);
        $this->pdf->Cell(35,5,'FECHA ACTUALIZACION','TLBR',0,'L',1);
        $this->pdf->Ln(5);

        $this->pdf-> SetFont('Arial','',8);
       
        $num=1;
        foreach ($lista as $row) {
            $Tipo=$row->Tipo;
            $Color=$row->Color;
            $NumeroPlaca=$row->NumeroPlaca;
            $Marca=$row->Marca;
            $Modelo=$row->Modelo;
            $FechaIngreso=formatearFecha($row->FechaIngreso);
            $FechaActualizacion=formatearFecha($row->FechaActualizacion);
            $this->pdf->Cell(7,5,$num,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Tipo,'TLBR',0,'L',0);
            $this->pdf->Cell(20,5,$Color,'TLBR',0,'L',0);
            $this->pdf->Cell(25,5,$NumeroPlaca,'TLBR',0,'L',0);
            $this->pdf->Cell(15,5,$Marca,'TLBR',0,'L',0);
            $this->pdf->Cell(18,5,$Modelo,'TLBR',0,'L',0);
            $this->pdf->Cell(25,5,$FechaIngreso,'TLBR',0,'L',0);
            $this->pdf->Cell(35,5,$FechaActualizacion,'TLBR',0,'L',0);
            $this->pdf->Ln(5);
            $num++;
        }
         $this->pdf->Output("listatransportes.pdf",'I');
    }

    public function modificar(){
        $idTransporte=$_POST['idTransporte'];
        $data['infotransporte']=$this->conductor_model->recuperarTransporte($idTransporte);

        $this->load->view('inc_head.php');  //archivos de cabeceras
        $this->load->view('est_modificar2',$data); //contenido
        $this->load->view('inc_footer.php'); //archivos del pie de pagina
    }
    public function modificarbd(){
        $idTransporte=$_POST['idTransporte'];
        $data['Tipo']=$_POST['Tipo'];
        $data['Color']=$_POST['Color'];
        $data['NumeroPlaca']=$_POST['NumeroPlaca'];
        $data['Marca']=$_POST['Marca'];
        $data['Modelo']=$_POST['Modelo'];
        $this->transporte_model->modificarTransporte($idTransporte,$data); 

        redirect('transporte/test','refresh');  
    }

    public function agregarbd(){
        $data['Color']=$_POST['Color'];
        $data['NumeroPlaca']=$_POST['NumeroPlaca'];
        $data['Tipo']=$_POST['Tipo'];
        $data['Marca']=$_POST['Marca'];
        $data['Modelo']=$_POST['Modelo'];
        $this->transporte_model->agregarTransporte($data);
        redirect('transporte/test','refresh');  
    }

       public function deleteRestorebd()
    {
        $idTransporte = $_POST['idTransporte'];
        $data['estado'] =  $_POST['estado'];
        $this->transporte_model->modificarTransporte($idTransporte, $data);
        redirect('transporte/test','refresh');  
    }
    public function subirfoto(){
        $data['idTransporte']=$_POST['idTransporte'];

       // $this->load->view('inc_head.php');  //archivos de cabeceras
        $this->load->view('transportes/subirform',$data); //contenido
        //$this->load->view('inc_footer.php'); //archivos del pie de pagina
    }

    public function subir(){
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
            $this->transporte_model->modificarTransporte($idTransporte,$data); 
            $this->upload->data(); 
        }
        redirect('transporte/test','refresh');  
    }
}
