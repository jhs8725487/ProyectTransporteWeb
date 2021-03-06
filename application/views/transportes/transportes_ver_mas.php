<?php
$idConductor = "";
$idTransporte = "";
$Nombre = "";
$apellidoPaterno = "";
$apellidoMaterno = "";
$Tipo = "";
$Color = "";
$NumeroPlaca = "";
$Estado = "";
$Marca = "";
$Modelo = "";
$FechaIngreso = "";
$FechaActualizacion = "";
$logo = "";

foreach ($infotransporte->result() as $row) {

    $idConductor = $row->idConductor;
    $idTransporte = $row->idTransporte;
    $Nombre = $row->Nombre;
    $apellidoPaterno = $row->ApellidoPaterno;
    $apellidoMaterno = $row->ApellidoMaterno;
    $Tipo = $row->Tipo;
    $Color = $row->Color;
    $NumeroPlaca = $row->NumeroPlaca;
    $Estado = $row->Estado;
    $Marca = $row->Marca;
    $Modelo = $row->Modelo;
    $FechaIngreso = $row->FechaIngreso;
    $FechaActualizacion = $row->FechaActualizacion;
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

                  <div class="modal fade" id="actualizarLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DATOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo base_url(); ?>index.php/transporte/updatefhoto" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
                                    <div class="modal-body">
                                        <input type="hidden" name="idTransporte" value="<?php echo $idTransporte; ?>">
                                         <input type="hidden" name="idConductor" value="<?php echo $idConductor; ?>">
                                        <label for="">Subir nueva foto: (solo .jpg)</label>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" accept="image/jpeg,image/png" name="userfile" placeholder="logo" required>
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="fas fa-image"></i>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">Ingrese una imagen, por favor.</div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

             <br>
                <div class="redondear-todo" style="background: #E5E5E5;">
                    <div class="row align-items-center" style="padding: 10px;">
                        <div class="col-md-12 ">
                            <span>
                                <img class="img-fluid shadow rounded-circle mx-auto d-block" src="<?php echo base_url(); ?>uploads/transportes/<?php echo $logo; ?>" alt="logo" width="220">
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
                if ($this->session->userdata('Rol') == 'Administrador' ) {
                ?>
                    <div class="row">
                        <div class="col-md-6 col-12 pading">
                            <div class="row justify-content-center">
                                <button class="btn btn-info rounded-pill" data-toggle="modal" data-target="#actualizarInstituto">Editar datos del movil</button>
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
                                <h4 class="text-white">DATOS DEL MOVIL ASIGNADO</h4>
                            </div>
                            <div class="card-body">
                                <div class="row" style="padding-bottom: 10px ;">
                                    <div class="col-md-6" style=" border-right: 1px solid #E5E5E5;">
                                        <p><strong class="card-title">Nombre: </strong><?php echo $Nombre; ?></p>
                                        <p><strong class="card-title">Apellido paterno: </strong><?php echo $apellidoPaterno; ?></p>
                                        <p><strong class="card-title">Apellido materno: </strong><?php echo $apellidoMaterno; ?></p>
                                        <p><strong class="card-title">Tipo: </strong><a href="mailto:<?php echo $Tipo; ?>" class="text-muted"><?php echo $Tipo; ?></a></p>
                                        <p><strong class="card-title">Color: </strong><?php echo $Color; ?></p>
                                        <p><strong class="card-title">Numero de placa: </strong><?php echo $NumeroPlaca; ?></p>
                                    </div>

                                    <div class="col-md-6">
                                        <p><strong class="card-title">Estado: </strong><?php echo $Estado; ?></p>
                                        <p><strong class="card-title">Marca: </strong><?php echo $Marca; ?></p>
                                        <p><strong class="card-title">Modelo: </strong><?php echo $Modelo; ?></p>
                                        <p><strong class="card-title">Fecha de ingreso: </strong><?php echo $FechaIngreso; ?></p>
                                          <p><strong class="card-title">Fecha de actualizacion: </strong><?php echo $FechaActualizacion; ?></p>
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
                            <form action="<?php echo base_url(); ?>index.php/conductor/mas" method="get">
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