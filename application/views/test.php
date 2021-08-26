  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="text-align:center">ADMINISTRACION DE USUARIOS</h1>
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
                <h3 class="card-title"></h3>
                <h3><?php echo "Usuario: ".$this->session->userdata('NombreUsuario'); ?></h3>
                <h3><?php echo "Rol: ".$this->session->userdata('Rol'); ?></h3>
                <h3><?php echo "".$this->session->userdata('idusuario'); ?></h3>
                <?php 
                  echo date('Y/m/d H:i:s');
                ?>
              <br>
              <?php
              echo form_open_multipart('usuarios/logout');
              ?>
              <button type="submit" class="btn btn-danger btn-block">Salir</button>
              <?php
                  echo form_close();
              ?>
               </div>


               <div class="card">
              <div class="card-header">
                <h3 class="card-title">LISTADO DE USUARIOS</h3>
                <br>
                <?php 
                  echo date('Y/m/d H:i:s');
                ?>
                    <?php
                    echo form_open_multipart('usuarios/agregar');
                    ?>
                      <button type="submit" class="btn btn-success btn-xs">Agregar usuario</button>
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
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Estado</th>
                    <th>Cedula</th>    
                    <th>Usuario</th> 
                    <th>Rol</th> 
                    <th>Fecha Ingreso</th>  
                    <th>Dar de alta</th> 
                    <th>Dar de baja</th>  
                              
                  </tr>
                  </thead>
                  <tbody>
                  <?php
              $indice=1;
              foreach($usuarios->result() as $row){
              ?>

                  <tr>
                    <td><?php echo $indice;?></td>
                    <td><?php echo $row->Nombre;?></td>
                    <td><?php echo $row->ApellidoPaterno;?></td>
                    <td><?php echo $row->ApellidoMaterno;?></td>
                    <td><?php echo $row->FechaNacimiento;?></td>
                    <td><?php echo $row->Sexo;?></td>
                    <td><?php echo $row->Estado;?></td>
                    <td><?php echo $row->Cedula;?></td>
                    <td><?php echo UsuarioPassword($row->Cedula,$row->Nombre,$row->ApellidoPaterno,$row->ApellidoMaterno);?></td>
                    <td><?php echo $row->Rol;?></td>
                    <td><?php echo formatearFecha($row->FechaRegistro);?></td>
           
           
                    <td>
        <?php
          echo form_open_multipart('usuarios/DarAlta');
        ?>
        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
        <button type="submit" class="btn btn-primary btn-xs">Alta</button>
        <?php
          echo form_close();
        ?>
        </td>
        <td>
        <?php
          echo form_open_multipart('usuarios/DarBaja');
        ?>
        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
        <button type="submit" class="btn btn-danger btn-xs">Baja</button>
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
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Estado</th>
                    <th>Cedula</th>  
                    <th>Usuario</th>   
                    <th>Rol</th> 
                    <th>Fecha Ingreso</th>  
                    <th>Dar de alta</th> 
                    <th>Dar de baja</th>  
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