<?php
$idConductor = "";
$Nombre = "";
$apellidoPaterno = "";
$apellidoMaterno = "";
$Sexo = "";
$Telefono = "";
$Cedula = "";
$Correo = "";
$usu_usuario = "";
$Estado = "";
$Categoria = "";
$FechaNacimiento = "";
$Expedido = "";
$logo = "";

foreach ($infoConductores->result() as $row) {

    $idConductor = $row->idConductor;
    $Nombre = $row->Nombre;
    $apellidoPaterno = $row->ApellidoPaterno;
    $apellidoMaterno = $row->ApellidoMaterno;
    $Sexo = $row->Sexo;
    $Telefono = $row->Telefono;
    $Cedula = $row->Cedula;
    $Correo = $row->Correo;
    $usu_usuario = $row->usu_usuario;
    $Estado = $row->Estado;
    $Categoria = $row->Categoria;
    $FechaNacimiento = $row->FechaNacimiento;
    $Expedido = $row->Expedido;
    $logo = $row->foto;
}

?>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper" style="display: block;">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-9 shadow">

             <br>
                <div class="redondear-todo" style="background: #E5E5E5;">
                    <div class="row align-items-center" style="padding: 10px;">
                        <div class="col-md-12 ">
                            <span>
                                <img class="img-fluid shadow rounded-circle mx-auto d-block" src="<?php echo base_url(); ?>uploads/usuarios/<?php echo $logo; ?>" alt="logo" width="220">
                            </span>
                        </div>

                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <h4 class="text-center font-weight-bold"><?php echo $Nombre; ?></h4>
                        </div>
                    </div>
                </div>
                <br>

                <?php
                if ($this->session->userdata('roll') == '1' || $this->session->userdata('roll') == '2') {
                ?>
                    <div class="row">
                        <div class="col-md-6 col-12 pading">
                            <div class="row justify-content-center">
                                <button class="btn btn-info rounded-pill" data-toggle="modal" data-target="#actualizarInstituto">Editar datos del conductor</button>
                            </div>

                        </div>
                        <div class="col-md-6 col-12 pading">
                            <div class="row justify-content-center">
                                <button class="btn btn-info rounded-pill" data-toggle="modal" data-target="#actualizarLogo">Actualizar fotografia</button>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow redondear-todo">
                            <div class="card-header text-center redondear-arriba" style="background: #D0333A;">
                                <h4 class="text-white">Datos del conductor</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" style="padding-bottom: 10px ;">
                                    <div class="col-md-6" style=" border-right: 1px solid #E5E5E5;">
                                        <p><strong class="card-title">Nombre: </strong><?php echo $Nombre; ?></p>
                                        <p><strong class="card-title">Apellido paterno: </strong><?php echo $apellidoPaterno; ?></p>
                                        <p><strong class="card-title">Apellido materno: </strong><?php echo $apellidoMaterno; ?></p>
                                        <p><strong class="card-title">Sexo: </strong><a href="mailto:<?php echo $Sexo; ?>" class="text-muted"><?php echo $Sexo; ?></a></p>
                                        <p><strong class="card-title">Teléfono: </strong><?php echo $Telefono; ?></p>
                                        <p><strong class="card-title">Cedula: </strong><?php echo $Cedula; ?></p>
                                    </div>

                                    <div class="col-md-6">
                                        <p><strong class="card-title">Correo: </strong><?php echo $Correo; ?></p>
                                        <p><strong class="card-title">Usuario: </strong><?php echo $usu_usuario; ?></p>
                                        <p><strong class="card-title">Categoria: </strong><?php echo $Categoria; ?></p>
                                        <p><strong class="card-title">Fecha de nacimiento: </strong><?php echo $FechaNacimiento; ?></p>
                                          <p><strong class="card-title">Expedido: </strong><?php echo $Expedido; ?></p>
                                           <p><strong class="card-title">Calificacion: </strong><?php echo $Expedido; ?></p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

           
                <div class="row">

                </div>
                  <div class="row">
                    <div class="col-md-12">
                            <form action="<?php echo base_url(); ?>index.php/transporte/movilAsignado" method="get">
                            <input type="hidden" name="key" value="<?php echo $idConductor; ?>">
                            <button type="submit" class="btn btn-block btn-primary">Ver Conductor Asignado</button>
                        </form>

                    </div>
                </div>
              
                <br>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>

    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->