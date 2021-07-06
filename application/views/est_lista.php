<div class="container">
  <div class="row">  
    <div class="col-md-12">
<?php
echo form_open_multipart('conductor/agregar');
?>
  <button type="submit" class="btn btn-success btn-xs">Agregar conductor</button>
<?php
echo form_close();
?>






    <table class="table">
<thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Nombre</th>
    <th scope="col">Primer Apellido</th>
    <th scope="col">Segundo Apellido</th>
    <th scope="col">Cedula</th>
    <th scope="col">Edad</th>
    <th scope="col">Estado</th>
    <th scope="col">Telefono</th>
    <th scope="col">Correo</th>
    <th scope="col">Fecha Ingreso</th>
    <th scope="col">Modificar</th>
    <th scope="col">Eliminar</th>

    </tr>
</thead>
<tbody>

<?php
$indice=1;
    foreach($conductores->result() as $row){

    ?>
        <tr>
        <th scope="row"><?php echo $indice;?></th>
        <td><?php echo $row->Nombre;?></td>
        <td><?php echo $row->ApellidoPaterno;?></td>
        <td><?php echo $row->ApellidoMaterno;?></td>
        <td><?php echo $row->Cedula;?></td>
        <td><?php echo $row->Edad;?></td>
        <td><?php echo $row->Estado;?></td>
        <td><?php echo $row->Telefono;?></td>
        <td><?php echo $row->Correo;?></td>
        <td><?php echo $row->Fechaingreso;?></td>
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
</table>
</div>
</div>
</div>
