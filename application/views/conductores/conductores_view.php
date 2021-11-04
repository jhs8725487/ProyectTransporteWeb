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
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">CONDUCTORES DE LA LINEA 111</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Inicio</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Institutos</li>
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
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold">ADMINISTRACION DE CONDUCTORES</h4>
                        <div class="table-responsive">
                              <?php 
                                echo date('Y/m/d H:i:s');
                                ?>
                            
                                <br/>
                              
                            <table id="example" class="table table-striped table-bordered no-wrap table-hover table-primary table-sm mb-0" cellspacing="0" width="100%">

                                <thead>
                                    <tr>     
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Categoria</th>
                                        <th>FechaNacimiento</th>
                                        <th>Expedido</th> 
                                        <th>Estado</th> 
                                        <th>FechaIngreso</th>   
                                        <th>FechaActualizacion</th> 
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <?php
                                    $num = 1;
                                    foreach ($infoConductores->result() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $num;?></td>
                                            <td><?php echo $row->Nombre; ?></td>
                                            <td><?php echo $row->ApellidoPaterno; ?></td>
                                            <td><?php echo $row->ApellidoMaterno; ?></td>
                                            <td><?php echo $row->Categoria; ?></td>
                                            <td><?php echo $row->FechaNacimiento; ?></td>
                                            <td><?php echo $row->Expedido; ?></td>
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
                                            <td><?php echo $row->FechaIngreso; ?></td>
                                            <td><?php echo $row->FechaActualizacion; ?></td>
                                        
                                      <td>
                                                <div class="row" style="padding: 15px;">
                                                    <div class="col-md-12">
                                                        <span data-toggle="tooltip" data-placement="top" title="Ver más">
                                                            <form action="<?php echo base_url(); ?>index.php/conductor/mas" method="get">
                                                                <input type="hidden" name="key" value="<?php echo $row->idConductor; ?>">
                                                                <button type="submit" class="btn btn-block btn-sm btn-success">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </form>
                                                        </span>
                                                    </div>
                                                </div>
                                            </td>
                                    
                                        </tr>
                                    <?php
                                    $num++;
                                    }

                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nombre</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Categoria</th>
                                        <th>FechaNacimiento</th>
                                        <th>Expedido</th> 
                                        <th>Estado</th> 
                                        <th>FechaIngreso</th>   
                                        <th>FechaActualizacion</th> 
                                        <th>Acciones</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


          <!-- MODAL PARA INSERTAR -->
        <div class="modal fade" id="insertarConductor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar conductor </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/conductor/agregarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                            <div class="mb-3">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control text-uppercase" name="nombre" data-toggle="tooltip" data-placement="left" title="Nombre del conductor" placeholder="Nombre del conductor" required>
                                <div class="valid-feedback">OK.</div>
                                <div class="invalid-feedback">Es necesario el nombre del conductor.</div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label for="">Apellido paterno:</label>
                                            <input type="text" class="form-control text-uppercase" name="ApellidoPaterno" data-toggle="tooltip" data-placement="left" title="Apellido paterno" placeholder="Apellido paterno" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el apellido paterno.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Apellido Materno:</label>
                                            <input type="text" class="form-control text-uppercase" name="ApellidoMaterno" data-toggle="tooltip" data-placement="left" title="Apellido Materno" placeholder="Apellido Materno" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el apellido materno.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                            <label for="">Fecha de nacimiento:</label>
                                            <input type="date" class="form-control text-uppercase" name="FechaNacimiento" data-toggle="tooltip" data-placement="left" title="Fecha de nacimiento" placeholder="FechaNacimiento" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario la fecha de nacimiento.</div>
                                    </div>
                                        <div class="col-md-6">
                                             <label for="">Sexo:</label>
                                        <select class="form-control" name="sexo" data-toggle="tooltip" data-placement="left" title="Sexo" required>
                                            <option value selected>Seleccionar</option>
                                                <option value="F">FEMENINO</option>
                                                <option value="M">MASCULINO</option>
                                        </select>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario seleccionar una opcion.</div>
                                        </div>
                                </div>
                            </div>
                         
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Cedula de identidad:</label>
                                        <input type="text-uppercase" class="form-control text-uppercase" name="cedula" data-toggle="tooltip" data-placement="left" title="Dirección" placeholder="Dirección" required>
                                        <div class="valid-feedback">OK.</div>
                                         <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Número telefónico:</label>
                                        <input type="tel" class="form-control" name="telefono" data-toggle="tooltip" data-placement="Bottom" title="Teléfono" placeholder="Teléfono del conductor" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el numero telefonico.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Correo electrónico:</label>
                                        <input type="email" class="form-control" name="correo" data-toggle="tooltip" data-placement="right" title="Correo" placeholder="Correo del conductor" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el correo electronico.</div>
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
        foreach ($infoConductores->result() as $row) {
        ?>
            <!--MODAL PARA ACTUALIZAR-->
            <div class="modal fade" id="editarConductor<?php echo $row->idConductor; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-warning">
                            <h5 class="modal-title" id="exampleModalLabel">Actualizar instituto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="<?php echo base_url(); ?>index.php/conductor/modificarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                                <div class="mb-3">
                                    <label for="">Nombre:</label>
                                    <input type="text" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->Nombre); ?>" name="nombre" data-toggle="tooltip" data-placement="left" title="Nombre del conductor" placeholder="Nombre del conductor" required>
                                    <div class="valid-feedback">OK.</div>
                                    <div class="invalid-feedback">Es necesario el nombre del conductor.</div>
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
                                            <div class="invalid-feedback">Es necesario el apellido materno.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                             <label for="">Fecha de nacimiento:</label>
                                                <input type="date" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->FechaNacimiento); ?>" name="FechaNacimiento" data-toggle="tooltip" data-placement="left" title="Fecha de nacimiento" placeholder="Nombre del instituto" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la fecha de nacimiento.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Sexo:</label>
                                            <select class="form-control" name="sexo" data-toggle="tooltip" data-placement="right" title="Sexo" required>
                                                <option value="<?php echo $row->Sexo; ?>" selected><?php echo $row->Sexo; ?></option>
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
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->Cedula); ?>" name="cedula" data-toggle="tooltip" data-placement="left" title="Cedula" placeholder="Cedula" required>
                                            <div class="valid-feedback">OK.</div>
                                            <div class="invalid-feedback">Es necesario la cedula de identidad.</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Telefono:</label>
                                                <input type="input" class="form-control text-uppercase" value="<?php echo htmlspecialchars($row->Telefono); ?>" name="telefono" data-toggle="tooltip" data-placement="left" title="Telefono del conductor" placeholder="Telefono del conductor" required>
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
            <!--MODAL PARA ELIMINAR-->
            <div class="modal fade" id="eliminarConductor<?php echo $row->idConductor; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Conductor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de eliminar al conductor "<?php echo $row->Nombre; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('conductor/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
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
            <div class="modal fade" id="restaurarConductor<?php echo $row->idConductor; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Recuperar Conductor</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de restaurar al conductor "<?php echo $row->Nombre; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('conductor/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
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