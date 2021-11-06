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
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">TRANSPORTES DE LA LINEA 111</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Inicio</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Transportes</li>
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
                    <h4 class="card-title" style="text-align: center; font-size:30px; font-weight: bold">ADMINISTRACION DE TRANSPORTE</h4>
                        <div class="table-responsive">
                              <!--<?php 
                                //echo date('Y/m/d H:i:s');
                                ?>
                                <?php
                                //echo form_open_multipart('transporte/agregar');
                                ?>-->
                                <span class="float-right" data-toggle="modal" data-placement="top" title="Nuevo transporte" >
                            <button type="button" style="color :white; background: #D0333A" class="btn btn-primary float-right" data-toggle="modal" data-target="#insertartransporte">
                            <i class="fas fa-plus"></i> Insertar nuevo transporte
                            </button>
                        </span>

                           <span class="float-left" data-toggle="tooltip" data-placement="top" title="Exportar PDF" >
                        <a target="_blank" href="<?php echo base_url(); ?>index.php/transporte/listapdf">
                            <button class="btn btn-success btn float-right">Exportar a pdf </button>
                        </a>
                        </span>
                        <br>
                             
                                <br/>
                              
                            <table id="example" class="table table-striped table-bordered no-wrap table-hover table-primary table-sm mb-0" cellspacing="0" width="100%">

                                <thead>
                                    <tr>     
                                        <th>No.</th>
                                        <th>Tipo</th>
                                        <th>Color</th>
                                        <th>Numero Placa</th>
                                        <th>Estado</th>
                                        <th>Marca</th>
                                        <th>Modelo</th> 
                                        <th>Foto</th> 
                                        <th>Fecha Ingreso</th>   
                                        <th>Fecha Actualizacion</th>   
                                        <th>Acciones</th>
                                        <th>Subir</th>  

                                    </tr>
                                </thead>
                                <tbody >
                                    <?php
                                    $num = 1;
                                    foreach ($infoTransportes->result() as $row) {
                                    ?>
                                        <tr>
                                            <td><?php echo $num;?></td>
                                            <td><?php echo $row->Tipo; ?></td>
                                            <td><?php echo $row->Color; ?></td>
                                            <td><?php echo $row->NumeroPlaca; ?></td>
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
                                            <td><?php echo $row->Marca; ?></td>
                                            <td><?php echo $row->Modelo; ?></td>
                                            <td>
                                              <?php
                                              $foto=$row->foto;
                                              if($foto==""){
                                                //mostrar imagen por defecto
                                                ?>
                                                <img width="100" src="<?php echo base_url(); ?>/uploads/transportes/perfil.jpg" alt="">

                                                <?php

                                               
                                              }else{
                                                //mostrar la foto del usuario
                                                ?>
                                                <img width="100" src="<?php echo base_url(); ?>/uploads/transportes/<?php echo $foto; ?>" alt="">
                                                <?php

                                              }
                                              ?>
                                            </td>
                                            <td><?php echo formatearFecha($row->FechaIngreso); ?></td>
                                            <td><?php echo formatearFecha($row->FechaActualizacion); ?></td>
                                     <td>
                                                <div class="row">
                                                    <div class="col-md-6 col-6">
                                                        <!--<button class="btn btn-block btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></button>-->
                                                        <span data-toggle="tooltip" data-placement="top" title="Editar">
                                                            <button type="button" class="btn btn-block btn-sm btn-info" data-toggle="modal" data-target="#editarTransporte<?php echo $row->idTransporte; ?>">
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
                                                                <button type="button" class="btn btn-block btn-sm btn-danger" data-toggle="modal" data-target="#eliminartransporte<?php echo $row->idTransporte; ?>">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </span>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <!--<button class="btn btn-block btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Restaurar"><i class="fas fa-trash-restore"></i></button>-->
                                                            <span data-toggle="tooltip" data-placement="top" title="Restaurar">
                                                                <button type="button" class="btn btn-block btn-sm btn-success" data-toggle="modal" data-target="#restaurartransporte<?php echo $row->idTransporte; ?>">
                                                                    <i class="fas fa-trash-restore"></i>
                                                                </button>
                                                            </span>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                            <?php
                                            echo form_open_multipart('transporte/subirfoto');
                                            ?>
                                            <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
                                            <button type="submit" class="btn btn-primary btn-xs">Subir</button>
                                            <?php
                                            echo form_close();
                                            ?>
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
                                        <th>Tipo</th>
                                        <th>Color</th>
                                        <th>Numero Placa</th>
                                        <th>Estado</th>
                                        <th>Marca</th>
                                        <th>Modelo</th> 
                                        <th>Foto</th> 
                                        <th>Fecha Ingreso</th>   
                                        <th>Fecha Actualizacion</th> 
                                        <th>Acciones</th>
                                        <th>Subir</th>  
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL PARA INSERTAR -->
        <div class="modal fade" id="insertartransporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header text-white bg-danger">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Transporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/transporte/agregarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                            <div class="mb-3">
                                <label for="">Color:</label>
                                <input type="text" class="form-control text-uppercase" name="Color" data-toggle="tooltip" data-placement="left" title="Color del transporte" placeholder="Color del transporte" required>
                                <div class="valid-feedback">OK.</div>
                                <div class="invalid-feedback">Es necesario llenar este campo.</div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                          <label for="">Placa:</label>
                                            <input type="text" class="form-control text-uppercase" name="NumeroPlaca" data-toggle="tooltip" data-placement="left" title="Placa del transporte" placeholder="Placa del transporte" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario llenar este campo.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Tipo:</label><br>
                                <div class="btn-group btn-block" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Taxitrufi" checked>
                                            <label class="custom-control-label" for="checkbox0">Taxitrufi</label>
                                        </div>
                                    </label>
                                    <label class="btn btn-danger">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Taxi">
                                            <label class="custom-control-label" for="checkbox1">Taxi</label>
                                        </div>
                                    </label>
                                    <label class="btn btn-danger">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Minibus">
                                            <label class="custom-control-label" for="checkbox2">Minibus</label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                         
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Marca:</label>
                                        <input type="text" class="form-control text-uppercase" name="Marca" data-toggle="tooltip" data-placement="left" title="Marca del transporte" placeholder="Marca del transporte" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario llenar este campo.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Modelo:</label>
                                        <input type="tel" class="form-control text-uppercase" name="Modelo" data-toggle="tooltip" data-placement="Bottom" title="Modelo del transporte" placeholder="Modelo del transporte" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario llenar este campo.</div>
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
        foreach ($infoTransportes->result() as $row) {
        ?>
            <!--MODAL PARA ACTUALIZAR-->
               <div class="modal fade" id="editarTransporte<?php echo $row->idTransporte; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-white bg-danger">
                        <h5 class="modal-title" id="exampleModalLabel">Agregar Transporte</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url(); ?>index.php/transporte/modificarbd" method="post" class="needs-validation" autocomplete="off" novalidate>
                            <div class="mb-3">
                                <label for="">Color:</label>
                                <input type="text" class="form-control text-uppercase" name="Color" data-toggle="tooltip" data-placement="left" value="<?php echo htmlspecialchars($row->Color); ?>" title="Nombre del instituto" placeholder="Nombre del instituto" required>
                                <div class="valid-feedback">OK.</div>
                                <div class="invalid-feedback">Agregar Transporte.</div>
                            </div>
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-6">
                                          <label for="">Placa:</label>
                                            <input type="text" class="form-control text-uppercase" name="NumeroPlaca" data-toggle="tooltip" data-placement="left" value="<?php echo htmlspecialchars($row->NumeroPlaca); ?>" title="Nombre del instituto" placeholder="Nombre del instituto" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario la naturaleza juridica.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="">Tipo:</label><br>
                                <div class="btn-group btn-block" data-toggle="buttons">
                                    <label class="btn btn-danger active">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Taxitrufi" checked>
                                            <label class="custom-control-label" for="checkbox0">Taxitrufi</label>
                                        </div>
                                    </label>
                                    <label class="btn btn-danger">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Taxi">
                                            <label class="custom-control-label" for="checkbox1">Taxi</label>
                                        </div>
                                    </label>
                                    <label class="btn btn-danger">
                                        <div class="custom-control custom-checkbox mr-sm-2">
                                            <input type="radio" class="custom-control-input" name="Tipo" value="Minibus">
                                            <label class="custom-control-label" for="checkbox2">Minibus</label>
                                        </div>
                                    </label>
                                </div>
                            </div>
                         
                            <div class="mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="">Marca:</label>
                                        <input type="text" class="form-control text-uppercase" name="Marca" data-toggle="tooltip" data-placement="left" value="<?php echo htmlspecialchars($row->Marca); ?>" title="Dirección" placeholder="Dirección" required>
                                        <div class="valid-feedback">OK.</div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Modelo:</label>
                                        <input type="tel" class="form-control" name="Modelo" data-toggle="tooltip" data-placement="Bottom" value="<?php echo htmlspecialchars($row->Modelo); ?>" title="Teléfono" placeholder="Teléfono del instituto" required>
                                        <div class="valid-feedback">OK.</div>
                                        <div class="invalid-feedback">Es necesario el teléfono del instituto.</div>
                                    </div>
                                </div>
                            </div>
                
                            <hr>
                            <div class="mb-3 float-right">
                              <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-check"></i> Guardar</</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

            <!--MODAL PARA ELIMINAR-->
            <div class="modal fade" id="eliminartransporte<?php echo $row->idTransporte; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-danger">
                            <h5 class="modal-title" id="exampleModalLabel">Eliminar transporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de eliminar al transporte "<?php echo $row->idTransporte; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('transporte/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
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
            <div class="modal fade" id="restaurartransporte<?php echo $row->idTransporte; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-white bg-success">
                            <h5 class="modal-title" id="exampleModalLabel">Recuperar transporte</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esta segur@ de restaurar al transporte "<?php echo $row->idTransporte; ?>".</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <?php
                            echo form_open_multipart('transporte/deleteRestorebd');
                            ?>
                            <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
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