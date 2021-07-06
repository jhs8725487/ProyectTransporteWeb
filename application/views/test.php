  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="text-align:center">ADMINISTRACION DE TRANSPORTES Y CONDUCTORES DE LA LINEA 111</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<link rel="stylesheet" href="../bootstrap/css/estilopropio.css">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

      

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTADO DE LOS CONDUCTORES</h3>
                <br>
                <?php 
                  echo date('Y/m/d H:i:s');
                ?>
                    <?php
                    echo form_open_multipart('conductor/agregar');
                    ?>
                      <button type="submit" class="btn btn-success btn-xs">Agregar conductor</button>
                    <?php
                    echo form_close();
                    ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Cedula</th>    
                    <th>Edad</th>
                   <!--  <th>Estado</th>    --> 
                   <th>Telefono</th>       
                   <th>Correo</th> 
                   <th>Fecha Ingreso</th>   
                   <th>Modificar</th> 
                   <th>Eliminar</th>  
                              
                  </tr>
                  </thead>
                  <tbody>
                  <?php
              $indice=1;
              foreach($conductores->result() as $row){
              ?>

                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->Nombre;?></td>
                    <td><?php echo $row->ApellidoPaterno;?></td>
                    <td><?php echo $row->ApellidoMaterno;?></td>
                    <td><?php echo $row->Cedula;?></td>
                    <td><?php echo $row->Edad;?></td>
                    <td><?php echo $row->Telefono;?></td>
                    <td><?php echo $row->Correo;?></td>
                    <td><?php echo formatearFecha($row->Fechaingreso);?></td>
                    <td>
        <?php
          echo form_open_multipart('conductor/modificar');
        ?>
        <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
        <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
        <?php
          echo form_close();
        ?>
        </td>
        <td>
        <?php
          echo form_open_multipart('conductor/eliminarbd');
        ?>
        <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
        <?php
          echo form_close();
        ?>
        </td>
                  </tr>
                  <?php
        $indice++;
        }
        ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Nombre</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Cedula</th>    
                    <th>Edad</th>
                      <!--  <th>Estado</th>    -->    
                    <th>Telefono</th>       
                    <th>Correo</th>  
                    <th>Fecha Ingreso</th>   
                    <th>Modificar</th> 
                    <th>Eliminar</th>   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->


<br/>
<br/>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listado de transportes</h3>
                <br>
                <?php 
                  echo date('Y/m/d H:i:s');
                ?>
                    <?php
                    echo form_open_multipart('conductor/agregar2');
                    ?>
                      <button type="submit" class="btn btn-success btn-xs">Agregar conductor</button>
                    <?php
                    echo form_close();
                    ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Numero de Placa</th>
                    <th>Marca</th>    
                    <th>Modelo</th>
                   <!--  <th>Estado</th>    --> 
                   <th>Fecha Ingreso</th>    
                   <th>Modificar</th>    
                    <th>Eliminar</th>                            
                  </tr>
                  </thead>
                  <tbody>
                  <?php
              $indice=1;
              foreach($transportes->result() as $row){
              ?>

                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->Tipo;?></td>
                    <td><?php echo $row->Color;?></td>
                    <td><?php echo $row->NumeroPlaca;?></td>
                    <td><?php echo $row->Marca;?></td>
                    <td><?php echo $row->Modelo;?></td>
                    <td><?php echo formatearFecha($row->Fechaingreso);?></td>
                    <td>
        <?php
          echo form_open_multipart('conductor/modificar2');
        ?>
        <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
        <button type="submit" class="btn btn-primary btn-xs">Modificar</button>
        <?php
          echo form_close();
        ?>
        </td>
        <td>
        <?php
          echo form_open_multipart('conductor/eliminarbd2');
        ?>
        <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
        <button type="submit" class="btn btn-danger btn-xs">Eliminar</button>
        <?php
          echo form_close();
        ?>
        </td>
                  </tr>
                  <?php
        $indice++;
        }
        ?>

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No.</th>
                    <th>Tipo</th>
                    <th>Color</th>
                    <th>Numero de Placa</th>
                    <th>Marca</th>    
                    <th>Modelo</th>
                   <!--  <th>Estado</th>    --> 
                   <th>Fecha Ingreso</th> 
                   <th>Modificar</th>    
                   <th>Eliminar</th>                               
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>