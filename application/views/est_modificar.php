<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
    foreach($infoconductor->result() as $row){
        echo form_open_multipart('conductor/modificarbd');

    ?>
 <input type="hidden" name="idConductor" value="<?php echo $row->idConductor; ?>">
<div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" value="<?php echo $row->ApellidoPaterno; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" value="<?php echo $row->ApellidoMaterno; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="<?php echo $row->Nombre; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" value="<?php echo $row->Telefono; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo" value="<?php echo $row->Correo; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
    <?php
    echo form_close();
    }
    ?>

   
    </div>
  </div>
</div>
