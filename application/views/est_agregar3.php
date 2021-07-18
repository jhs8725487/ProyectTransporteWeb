<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
        echo form_open_multipart('usuarios/agregarbd');

    ?>
    <h1>INTRODUZCA DATOS DEL NUEVO USUARIO</h1>
<div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="Nombre" placeholder="Escriba el primer apellido">
  </div>

  <div class="mb-3">
    <label class="form-label">Apellido paterno</label>
    <input type="text" class="form-control" name="ApellidoPaterno" placeholder="Escriba el segundo apellido">
  </div>

  <div class="mb-3">
    <label class="form-label">Apellido materno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" placeholder="Escriba el nombre">
  </div>

  <div class="mb-3">
    <label class="form-label">Fecha de nacimiento</label>
    <input type="date" class="form-control" name="FechaNacimiento" >
  </div>

  <div class="mb-3">
    <label class="form-label">Sexo</label>
    <select class="form-control" name="Sexo" id="Sexo"> 
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>
  </div>

  <div class="mb-3">
    <label class="form-label">Cedula</label>
    <input type="text" class="form-control" name="Cedula" placeholder="Escriba el telefono">
  </div>

  <div class="mb-3">
    <label class="form-label">Rol</label>
    <select class="form-control" name="Rol" id="Rol"> 
        <option value="Administrador">Administrador</option>
        <option value="Supervisor">Supervisor</option>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
    <?php
    echo form_close();
    ?>

   
    </div>
  </div>
</div>
