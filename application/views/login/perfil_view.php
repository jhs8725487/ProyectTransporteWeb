<?php

$username = "";
$Nombre = "";
$ApellidoPaterno = "";
$ApellidoMaterno = "";
$Sexo = "";
$Telefono = "";
$Cedula = "";
$Correo = "";
$Rol = "";
$idUsuario = "";
$FechaRegistro = "";

foreach ($infoUsuario->result() as $row) {
    $username = $row->usu_usuario;
    $Nombre = $row->Nombre;
    $ApellidoPaterno = $row->ApellidoPaterno;
    $ApellidoMaterno = $row->ApellidoMaterno;
    $Sexo = $row->Sexo;
    $Telefono = $row->Telefono;
    $Cedula = $row->Cedula;
    $Correo = $row->Correo;
    $Rol =  $row->Rol;
    $idUsuario = $row->idUsuario;
    $FechaRegistro = $row->FechaRegistro;
}

?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
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
            <div class="col-md-9">

            <div class="modal fade" id="editarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Modificar mis datos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url(); ?>index.php/usuarios/modificarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                                <div class="mb-3">
                                    <label for="">Nombre:</label>
                                    <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Nombre); ?>" name="Nombre" data-toggle="tooltip" data-placement="left" title="Nombre del Usuario" placeholder="Nombre del Usuario" required>
                                    <div class="valid-feedback">OK.</div>
                                    <div class="invalid-feedback">Es necesario el nombre del Usuario.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label for="">Apellido Paterno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($ApellidoPaterno); ?>" name="ApellidoPaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                        </div>
                                         <div class="col-md-6">
                                                <label for="">Apellido Materno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($ApellidoMaterno); ?>" name="ApellidoMaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                        </div>
                                  
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="">Sexo:</label>
                                            <select class="form-control" name="Sexo" data-toggle="tooltip" data-placement="right" title="Sexo" required>
                                            <option value="F">FEMENINO</option>
                                                <option value="M">MASCULINO</option>
                                            </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar este campo.</div>
                                        </div>
                                        <div class="col-md-6">
                                             <label for="">Cedula:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Cedula); ?>" name="Telefono" data-toggle="tooltip" data-placement="left" title="Cedula" placeholder="Cedula" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Telefono:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($Telefono); ?>" name="Telefono" data-toggle="tooltip" data-placement="left" title="Cedula" placeholder="Cedula" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                        </div>
                                    <div class="col-md-6">
                                        <label for="">Correo:</label>
                                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($Correo); ?>" name="Correo" data-toggle="tooltip" data-placement="Bottom" title="Correo" placeholder="nombre del Usuario" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el correo electronico.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                               <div class="col-md-6">
                                             <label for="">Rol:</label>
                                        <select class="form-control" name="Rol" data-toggle="tooltip" data-placement="left" title="Rol" required>
                                                <option value="Supervisor">SUPERVISOR</option>
                                                <option value="Conductor">CONDUCTOR</option>
                                                <option value="Cliente">CLIENTE</option>
                                        </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar una opcion.</div>
                                </div>
                                
                                </div>
                            </div>
                                <hr>
                                <div class="mb-3 float-right">
                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

           

            
            <div class="modal fade" id="modificarPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-white bg-danger">
                                <h5 class="modal-title" id="exampleModalLabel">Modificar contraseña del usuario</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?php echo base_url(); ?>index.php/Welcome/modificarPS" method="post" name="confirmar" class="needs-validation" autocomplete="off" novalidate>

                                <div class="modal-body">
                                    <div id="resultado"></div>
                                    <input type="hidden" name="key" value="<?php echo $idUsuario; ?>">

                                    <div class="mb-3">
                                        <label for="">Ingrese su antigua contraseña:<span class="text-danger"> *</span></label>
                                        <input autocomplete="date_offset_get" type="password" class="form-control" value="" name="pass" id="pass" data-toggle="tooltip" data-placement="left" title="Nueva contraseña" placeholder="1234" required>
                                        <div class="invalid-feedback">Ingrese su antigua contraseña.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Ingrese su nueva contraseña:<span class="text-danger"> *</span></label>
                                        <input autocomplete="date_offset_get" type="password" class="form-control" value="" name="pass" id="pass" data-toggle="tooltip" data-placement="left" title="Nueva contraseña" placeholder="1234" required>
                                        <div class="invalid-feedback">Ingrese su nueva contraseña.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Repetir nueva contraseña:<span class="text-danger"> *</span></label>
                                        <input autocomplete="date_offset_get" type="password" class="form-control" value="" name="pass2" id="pass2" data-toggle="tooltip" data-placement="left" title="Nueva contraseña" placeholder="1234" required>
                                        <div class="invalid-feedback">repita su nueva contraseña.</div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" onclick="nuvaPassword()">Guardar cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
             

                
                <div class="card shadow redondear-todo">
                    <div class="card-header text-center redondear-arriba" style="background: #D0333A;">
                        <h4 class="text-white">Datos del usuario</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6" style=" border-right: 1px solid #E5E5E5;">
                                <p><strong class="card-title">Nombre de usuario: </strong><?php echo $username; ?></p>
                                <p><strong class="card-title">Nombre: </strong><?php echo $Nombre; ?></p>
                                <p><strong class="card-title">Apellido paterno: </strong><?php echo $ApellidoPaterno; ?></p>
                                <p><strong class="card-title">Apellido materno: </strong><?php echo $ApellidoMaterno; ?></p>

                                <p><strong class="card-title">Sexo: </strong><?php echo $Sexo; ?></p>
                                <p><strong class="card-title">Telefono: </strong><?php echo $Telefono; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong class="card-title">Cedula: </strong><a href="mailto:<?php echo $Correo; ?>" class="text-muted"><?php echo $Cedula; ?></a></p>
                                <p><strong class="card-title">Correo: </strong><?php echo $Correo; ?></p>
                                <p><strong class="card-title">Fecha registro: </strong><?php echo formatearFechaView($FechaRegistro); ?></p>
                                <p><strong class="card-title">Rol: </strong><?php echo $Rol; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6" style="padding: 10px;">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#editarUsuario">
                                    Modificar mis datos
                                </button>
                            </div>
                            <div class="col-md-6" style="padding: 10px;">
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modificarPass">
                                    Actualizar mi contraseña
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->