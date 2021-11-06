
               
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><?php echo "Rol: ".$this->session->userdata('Rol'); ?></h2>
                <h2 class="page-title text-truncate text-dark font-weight-medium mb-1"><?php echo "Usuario: ".$this->session->userdata('idusuario'); ?></h2>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Inicio</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Usuarios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- basic table -->
        <div class="row">
            <div class="col-12">
                <div class="card" >
                    <div class="card-body" >
                        <!--<div float="left">-->
                        <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold">ADMINISTRACION DE USUARIOS</h4>
                        <!--<?php
                        //if($this->session->flashdata('envio')){
                        //echo $this->session->flashdata('envio');
                        //}
                        ?>-->
                        </div>
                        <span class="float-left" data-toggle="tooltip" data-placement="top" title="Nuevo Usuario" >
                            <button type="button" style="color :white; background: #D0333A" class="btn float-left" data-toggle="modal" data-target="#insertarUsuario">
                            <i class="fas fa-plus"></i> Insertar nuevo Usuario
                            </button>
                            <br>
                            <br>
                        </span>
                          <span class="float-left" data-toggle="tooltip" data-placement="top" title="Exportar PDF" >
                        <a target="_blank" href="<?php echo base_url(); ?>index.php/usuarios/listapdf">
                            <button class="btn btn-success btn float-right">Exportar a pdf</button>
                        </a>
                        </span>
                       <!-- <span class="float-right">
                              <?php 
                               // echo date('Y/m/d H:i:s');
                                ?>
                                <?php
                                //echo form_open_multipart('usuarios/agregar');
                                ?>
                       
                                <?php
                                //echo form_close();
                                ?>
                        </span>-->
                        <div class="table-responsive">
                            <table id="example" class="table-striped table-primary table-sm mb-3" cellspacing="0" width="100%">
                            <thead class="bg-danger text-white">
                                <tr>   
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Sexo</th>
                                        <th>Telefono</th> 
                                        <th>Cedula</th>
                                        <th>Correo</th>
                                        <th>Usuario</th>
                                        <th>Rol</th> 
                                        <th>Estado</th>   
                                        <th>Fecha Registro</th>  
                                        <th>Fecha Actualizacion</th>  
                                        <th>Actualizar-Eliminar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $num = 1;
                                    foreach ($infoUsuarios->result() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $num;?></td>
                                            <td><?php echo $row->Nombre; ?></td>
                                            <td><?php echo $row->ApellidoPaterno; ?></td>
                                            <td><?php echo $row->ApellidoMaterno; ?></td>
                                            <td><?php echo $row->Sexo; ?></td>
                                            <td><?php echo $row->Telefono; ?></td>
                                            <td><?php echo $row->Cedula; ?></td>
                                            <td><?php echo $row->Correo; ?></td>
                                             <td><?php echo $row->usu_usuario; ?></td>
                                            <td><?php echo $row->Rol; ?></td>
                                            <td>
                                                <?php
                                                if ($row->Estado == '1') {
                                                ?>
                                                   <span class="badge bg-success text-white">HABILITADO</span>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <span class="badge bg-danger text-white" >DESHABILITADO</span>
                                                        <?php
                                                    }
                                                        ?>
                                            </td>
                                            <td ><?php echo formatearFecha($row->FechaRegistro); ?></td>
                                             <td><?php echo formatearFecha($row->FechaActualizacion); ?></td>
                                         <td>
                                                    <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <!--<button class="btn btn-block btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></button>-->
                                                        <span data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <button type="button" class="btn btn-block btn-sm btn-info" data-toggle="modal" data-target="#editarUsuario<?php echo $row->idUsuario; ?>">
                                                                <i class="fas fa-edit"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <div class="col-md-6 col-6">
                                                        <?php
                                                        if ($row->Estado == "1") {
                                                        ?>
                                                            <!--<button class="btn btn-block btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>-->
                                                            <span data-toggle="tooltip" data-placement="top" title="Eliminar">
                                                                <button type="button" class="btn btn-block btn-sm btn-danger" data-toggle="modal" data-target="#eliminarUsuario<?php echo $row->idUsuario; ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </span>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <!--<button class="btn btn-block btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Restaurar"><i class="fas fa-trash-restore"></i></button>-->
                                                            <span data-toggle="tooltip" data-placement="top" title="Restaurar">
                                                                <button type="button" class="btn btn-block btn-sm btn-success" data-toggle="modal" data-target="#restaurarUsuario<?php echo $row->idUsuario; ?>">
                                                                    <i class="fas fa-trash-restore"></i>
                                                                </button>
                                                            </span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                                                      
                                        </tr>
                                    <?php
                                    $num++;
                                    }

                                    ?>
                                </tbody>
                                <tfoot class="bg-primary text-white">
                                    <tr>
                                    <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Apellido paterno</th>
                                        <th>Apellido materno</th>
                                        <th>Sexo</th>
                                        <th>Telefono</th> 
                                        <th>Cedula</th>
                                        <th>Correo</th>
                                        <th>Usuario</th>
                                        <th>Rol</th> 
                                        <th>Estado</th>   
                                        <th>Fecha Registro</th>  
                                        <th>Fecha Actualizacion</th>  
                                        <th>Actualizar-Eliminar</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                        
          <!-- MODAL PARA INSERTAR -->
        <div class="modal fade" id="insertarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white bg-danger">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Usuario </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/usuarios/agregarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                            <div class="mb-3">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control text-uppercase" name="Nombre" data-toggle="tooltip" 
                                    data-placement="left" title="Nombre del Usuario" placeholder="Nombre del Usuario" required>
                                <div class="valid-feedback">OK.</div>
                                <div class="invalid-feedback">Es necesario el nombre del Usuario.</div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label for="">Apellido Paterno:</label>
                                            <input type="text" class="form-control text-uppercase" name="ApellidoPaterno" 
                                                data-toggle="tooltip" data-placement="left" title="Apellidos" placeholder="Apellido paterno" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                    </div>
                                      <div class="col-md-6">
                                            <label for="">Apellido Materno:</label>
                                            <input type="text" class="form-control text-uppercase" name="ApellidoMaterno" data-toggle="tooltip" 
                                                data-placement="left" title="Apellidos" placeholder="Apellido paterno">
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el apellido materno.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Sexo:</label>
                                        <select class="form-control" name="Sexo" data-toggle="tooltip" data-placement="left" title="Sexo" required>
                                            <option value selected>Seleccionar</option>
                                                <option value="F">FEMENINO</option>
                                                <option value="M">MASCULINO</option>
                                        </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar una opcion.</div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="">Correo:</label>
                                        <input type="text-uppercase" class="form-control text-uppercase" name="Correo" data-toggle="tooltip" data-placement="left" title="Dirección" placeholder="Correo" required>
                                        <div class="valid-feedback">OK.</div>
                                         <div class="invalid-feedback">Es necesario el correo electronico.</div>
                                    </div>
                                </div>
                            </div>
                         
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Cedula:</label>
                                        <input type="text-uppercase" class="form-control text-uppercase" name="Telefono" data-toggle="tooltip" data-placement="left" title="Dirección" placeholder="Cedula" required>
                                        <div class="valid-feedback">OK.</div>
                                         <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                               <div class="col-md-6">
                                             <label for="">Rol:</label>
                                        <select class="form-control" name="Rol" data-toggle="tooltip" data-placement="left" title="Sexo" required>
                                            <option value selected>Seleccionar</option>
                                                <option value="Supervisor">SUPERVISOR</option>
                                                 <option value="Administrador">ADMINISTRADOR</option>
                                                <option value="Coductor">CONDUCTOR</option>
                                                <option value="Cliente">CLIENTE</option>
                                        </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar una opcion.</div>
                                </div>
                                  
                                </div>
                            </div>
                            <hr>
                            <div class="mb-3 float-right">
                                <button type="reset" class="btn btn-dark">Limpiar formulario</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php
        foreach ($infoUsuarios->result() as $row) {
        ?>
            <!--MODAL PARA ACTUALIZAR-->
            <div class="modal fade" id="editarUsuario<?php echo $row->idUsuario; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url(); ?>index.php/usuarios/modificarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                                <div class="mb-3">
                                    <label for="">Nombre:</label>
                                    <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->Nombre); ?>" name="Nombre" data-toggle="tooltip" data-placement="left" title="Nombre del Usuario" placeholder="Nombre del Usuario" required>
                                    <div class="valid-feedback">OK.</div>
                                    <div class="invalid-feedback">Es necesario el nombre del Usuario.</div>
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label for="">Apellido Paterno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->ApellidoPaterno); ?>" name="ApellidoPaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                        </div>
                                         <div class="col-md-6">
                                                <label for="">Apellido Materno:</label>
                                                <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->ApellidoMaterno); ?>" name="ApellidoMaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
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
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Telefono:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->Telefono); ?>" name="Telefono" data-toggle="tooltip" data-placement="left" title="Cedula" placeholder="Cedula" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                        </div>
                                          <div class="col-md-6">
                                        <label for="">Correo:</label>
                                        <input type="text" class="form-control" value="<?php echo htmlspecialchars($row->Correo); ?>" name="Correo" data-toggle="tooltip" data-placement="Bottom" title="Correo" placeholder="nombre del Usuario" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el numero telefonico.</div>
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
            <!--MODAL PARA ELIMINAR-->
            <div class="modal fade" id="eliminarUsuario<?php echo $row->idUsuario; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de eliminar al Usuario "<?php echo $row->Nombre; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('usuarios/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                            <input type="hidden" name="estado" value="0">
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i> Continuar
                            </button>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!--MODAL PARA RESTAURAR-->
            <div class="modal fade" id="restaurarUsuario<?php echo $row->idUsuario; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Recuperar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de restaurar al Usuario "<?php echo $row->Nombre; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('usuarios/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
                            <input type="hidden" name="estado" value="1">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-trash-restore"></i> Continuar
                            </button>
                            <?php
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->