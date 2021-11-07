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

                  <div class="modal fade" id="actualizarLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR DATOS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?php echo base_url(); ?>index.php/conductor/updatefhoto" enctype="multipart/form-data" method="POST" class="needs-validation" novalidate>
                                    <div class="modal-body">
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
                    <!--MODAL PARA ACTUALIZAR-->
            <div class="modal fade" id="editarConductor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-warning">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar Conductor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url(); ?>index.php/conductor/modificarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                                <div class="mb-3">
                                    <label for="">Nombre:</label>
                                    <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Nombre); ?>" name="nombre" data-toggle="tooltip" data-placement="left" title="Nombre del conductor" placeholder="Nombre del conductor" required>
                                    <div class="valid-feedback">OK.</div>
                                    <div class="invalid-feedback">Es necesario el nombre del conductor.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label for="">Apellido Paterno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($apellidoPaterno); ?>" name="ApellidoPaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                        </div>
                                        <div class="col-md-6">
                                               <label for="">Apellido Materno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($apellidoMaterno); ?>" name="ApellidoMaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el apellido materno.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Fecha de nacimiento:</label>
                                                <input type="date" class="form-control text-uppercase" value="<?php echo htmlspecialchars($FechaNacimiento); ?>" name="FechaNacimiento" data-toggle="tooltip" data-placement="left" title="Fecha de nacimiento" placeholder="Nombre del instituto" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la fecha de nacimiento.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Sexo:</label>
                                            <select class="form-control" name="sexo" data-toggle="tooltip" data-placement="right" title="Sexo" required>
                                                <option value="<?php echo $Sexo; ?>" selected><?php echo $row->Sexo; ?></option>
                                                <option value="M">MASCULINO</option>
                                            </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar este campo.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Cedula:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Cedula); ?>" name="cedula" data-toggle="tooltip" data-placement="left" title="Cedula" placeholder="Cedula" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Telefono:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Telefono); ?>" name="telefono" data-toggle="tooltip" data-placement="left" title="Telefono del conductor" placeholder="Telefono del conductor" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el telefono del conductor.</div>
                                        </div>
                                    </div>
                                </div>
                        
                        



                              
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Correo electrónico:</label>
                                            <input type="email" class="form-control" value="<?php echo ($row->Correo == "Sin correo") ? "" : $row->Correo; ?>" name="correo" data-toggle="tooltip" data-placement="right" title="Correo" placeholder="Correo electrónico" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el correo del instituto.</div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="mb-3 float-right">
                                    <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

             <br>
                <div class="redondear-todo" style="background: #E5E5E5;">
                    <div class="row align-items-center" style="padding: 10px;">
                        <div class="col-md-12 ">
                            <span>
                                <img class="img-fluid shadow rounded-circle mx-auto d-block" src="<?php echo base_url(); ?>uploads/conductores/<?php echo $logo; ?>" alt="logo" width="220">
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
                                <button class="btn btn-info rounded-pill" data-toggle="modal" data-target="#editarConductor">Editar datos del conductor</button>
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
                  
                            <button type="submit" class="btn btn-block btn-primary">Ver Movil Asignado</button>
                        </form>

                    </div>
                </div>
                 <br>
                 

                    <div class="row">
                    <div class="col-md-12">
                            <input type="hidden" name="key" value="<?php echo $idConductor; ?>">
                  
                            <button type="submit" class="btn btn-block btn-primary">Asignar transporte</button>
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