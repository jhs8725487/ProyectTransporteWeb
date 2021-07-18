<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
    foreach($infousuario->result() as $row){
        echo form_open_multipart('usuarios/modificarbd');

    ?>
    <h1>MODIFIQUE SUS DATOS</h1>
 <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario; ?>">
<div class="mb-3">
    <label class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="<?php echo $row->ApellidoPaterno; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="<?php echo $row->ApellidoMaterno; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="<?php echo $row->Nombre; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="FechaNacimiento" value="<?php echo $row->FechaNacimiento; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Sexo</label>
    <select class="form-control" name="Sexo" id="Sexo" value="<?php echo $row->Sexo;?>"> 
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Introduzca una nueva contraseña</label>
    <input type="password" class="form-control" name="password" value="">
  </div>
  <button type="submit" class="btn btn-primary">Modificar</button>
    <?php
    echo form_close();
    }
    ?>

   
    </div>
  </div>
</div>
