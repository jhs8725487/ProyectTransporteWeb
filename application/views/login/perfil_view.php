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
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#modificarDatos">
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