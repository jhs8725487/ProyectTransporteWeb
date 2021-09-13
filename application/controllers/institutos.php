<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Institutos extends CI_Controller
{

    public function Index()
    {
        $data['infoInstitutos'] = $this->institutos_model->getIntitutos();
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_view', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function IndexAdmin()
    {
        $data['infoInstitutos'] = $this->institutos_model->getIntitutosAdmin();
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_admin_view', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function privadas()
    {
        $data['infoInstitutos'] = $this->institutos_model->getIntitutosNaturaleza('PRIVADA');
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_admin_view', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function publicas()
    {
        $data['infoInstitutos'] = $this->institutos_model->getIntitutosNaturaleza('FISCAL Y DE CONVENIO');
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_admin_view', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function artisticas()
    {
        $data['infoInstitutos'] = $this->institutos_model->getIntitutosNaturaleza('ARTISTICO');
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_admin_view', $data);
        $this->load->view('incrustaciones/footer');
    }
    public function verMas()
    {
        $idInstituto = $_POST['idInstituto'];
        $data['infoInstituto'] = $this->institutos_model->getInfoInstituto($idInstituto);
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/institutos_ver_mas_view',$data);
        $this->load->view('incrustaciones/footer');
    }
    public function deleteRestorebd()
    {
        $idInstituto = $_POST['idInstituto'];
        $data['estado'] =  $_POST['estado'];
        $this->institutos_model->modificarInstituto($idInstituto, $data);
        redirect('institutos/indexadmin', 'refresh');
    }
    public function insertarInstituto()
    {
        $this->load->view('incrustaciones/head');
        $this->load->view('incrustaciones/menu-topnav');
        $this->load->view('incrustaciones/menu-sidenav');
        $this->load->view('institutos/insertar_instituto_view');
        $this->load->view('incrustaciones/footer');
    }
    public function insertarInstitutobd()
    {
        $tipo = $_POST['TipoInstituto'];
        $tipoInstituto = "";
        for ($i = 0; $i < count($tipo); $i++) {

            if ($i == (count($tipo) - 1)) {
                $tipoInstituto = $tipoInstituto . $tipo[$i] . ".";
            } else {
                $tipoInstituto = $tipoInstituto . $tipo[$i] . ", ";
            }
        }

        $nivel = $_POST['nivelFormacion'];
        $nivelFormacion = "";
        for ($i = 0; $i < count($nivel); $i++) {

            if ($i == (count($nivel) - 1)) {
                $nivelFormacion = $nivelFormacion . $nivel[$i] . ".";
            } else {
                $nivelFormacion = $nivelFormacion . $nivel[$i] . ", ";
            }
        }

        $data['nombreInstituto'] =  mb_strtoupper($_POST['nombreInstituto']);
        $data['naturalezaJuridica'] =  $_POST['naturaleza'];
        $data['sede_subsede'] =  $_POST['sedeSubsede'];
        $data['nivelFormacion'] =  $nivelFormacion;
        $data['tipoInstituto'] =  $tipoInstituto;
        $data1['dirección'] =  $_POST['direccion'];
        $data['telefonoFijo'] =  $_POST['telefono'];
        $data['correoInstituto'] =  $_POST['correo'];
        $this->institutos_model->insertarInstituto($data, $data1);
        redirect('institutos/indexadmin', 'refresh');
    }
    public function modificarInstitutobd()
    {
        $idInstituto = $_POST['idInstituto'];
        $tipo = $_POST['TipoInstituto'];
        $tipoInstituto = "";
        for ($i = 0; $i < count($tipo); $i++) {

            if ($i == (count($tipo) - 1)) {
                $tipoInstituto = $tipoInstituto . $tipo[$i] . ".";
            } else {
                $tipoInstituto = $tipoInstituto . $tipo[$i] . ", ";
            }
        }

        $nivel = $_POST['nivelFormacion'];
        $nivelFormacion = "";
        for ($i = 0; $i < count($nivel); $i++) {

            if ($i == (count($nivel) - 1)) {
                $nivelFormacion = $nivelFormacion . $nivel[$i] . ".";
            } else {
                $nivelFormacion = $nivelFormacion . $nivel[$i] . ", ";
            }
        }

        $data['nombreInstituto'] =  mb_strtoupper($_POST['nombreInstituto']);
        $data['naturalezaJuridica'] =  $_POST['naturaleza'];
        $data['sede_subsede'] =  $_POST['sedeSubsede'];
        $data['nivelFormacion'] =  $nivelFormacion;
        $data['tipoInstituto'] =  $tipoInstituto;
        $data1['dirección'] =  $_POST['direccion'];
        $data['telefonoFijo'] =  $_POST['telefono'];
        $data['correoInstituto'] =  $_POST['correo'];
        $this->institutos_model->modificarInstituto($idInstituto, $data);
        $this->ubicacion_model->modificarUbicacion($idInstituto, $data1);
        redirect('institutos/indexadmin', 'refresh');
    }
}
