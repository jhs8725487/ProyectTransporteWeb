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
                <h3 class="card-title"></h3>
                <h3><?php echo "Usuario: ".$this->session->userdata('NombreUsuario'); ?></h3>
                <h3><?php echo "Rol: ".$this->session->userdata('Rol'); ?></h3>
                <h3><?php echo "".$this->session->userdata('idusuario'); ?></h3>
                <?php 
                  echo date('Y/m/d H:i:s');
                ?>
                <br>
                <br>

                <?php
              echo form_open_multipart('usuarios/ModificarUsuario');
              ?>
              <input type="hidden" name="idUsuario" value="<?php echo $this->session->userdata('idusuario'); ?>">
              <button type="submit" class="btn btn-primary btn-sm">Modificar mis datos</button>
              <?php
                  echo form_close();
              ?>
                <br>
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
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Cedula</th>    
                    <th>Telefono</th>       
                    <th>Correo</th> 
                    <th>Fecha Ingreso</th>   
                    <th>Fecha Actualizacion</th>  
                    <th>Foto</th> 
                    <th>Subir</th> 
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
                    <td><?php echo $row->FechaNacimiento;?></td>
                    <td><?php echo $row->Sexo;?></td>
                    <td><?php echo $row->Cedula;?></td>
                    <td><?php echo $row->Telefono;?></td>
                    <td><?php echo $row->Correo;?></td>
                    <td><?php echo formatearFecha($row->FechaIngreso);?></td>
                    <td><?php echo formatearFecha($row->FechaActualizacion);?></td>
                    <td>
                      <?php
                      $foto=$row->foto;
                      if($foto==""){
                        //mostrar imagen por defecto
                        ?>
                        <img width="100" src="<?php echo base_url(); ?>/uploads/conductores/perfil.jpg" alt="">

                        <?php

                       
                      }else{
                        //mostrar la foto del usuario
                        ?>
                        <img width="100" src="<?php echo base_url(); ?>/uploads/conductores/<?php echo $foto; ?>" alt="">
                        <?php

                      }
                      ?>
                    </td>
                    <td>
<?php
echo form_open_multipart('conductor/subirfoto');
?>
<input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
<button type="submit" class="btn btn-primary btn-xs">Subir</button>
<?php
echo form_close();
?>
                    </td>
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
                    <th>Fecha Nacimiento</th>
                    <th>Sexo</th>
                    <th>Cedula</th>    
                    <th>Telefono</th>       
                    <th>Correo</th> 
                    <th>Fecha Ingreso</th>   
                    <th>Fecha Actualizacion</th>  
                    <th>Foto</th> 
                    <th>Subir</th> 
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
                   <th>Fecha Ingreso</th> 
                   <th>Fecha Actualizacion</th> 
                   <th>Foto</th>   
                   <th>Subir</th>    
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
                    <td><?php echo formatearFecha($row->FechaIngreso);?></td>
                    <td><?php echo formatearFecha($row->FechaActualizacion);?></td>
                    <td>
<?php
$foto=$row->foto;
if($foto==""){
//mostrar imagen por defecto
?>
<img width="100" src="<?php echo base_url(); ?>/uploads/transportes/perfil2.jpg" alt="">

<?php


}else{
//mostrar la foto del usuario
?>
<img width="100" src="<?php echo base_url(); ?>/uploads/transportes/<?php echo $foto; ?>" alt="">
<?php

}
?>
                    </td>
                    <td>
                    <?php
echo form_open_multipart('conductor/subirfoto2');
?>
<input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
<button type="submit" class="btn btn-primary btn-xs">Subir</button>
<?php
echo form_close();
?>
                    </td>
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
                    <th>Fecha Ingreso</th> 
                    <th>Fecha Actualizacion</th> 
                    <th>Foto</th>   
                    <th>Subir</th>    
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