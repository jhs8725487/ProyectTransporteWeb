<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
        echo form_open_multipart('conductor/agregarbd');

    ?>
    <h1>INTRODUZCA DATOS DEL CONDUCTOR</h1>
<div class="mb-3">
    <label class="form-label">Primer Apellido</label>
    <input type="text" class="form-control" name="primerApellido" placeholder="Escriba el primer apellido">
  </div>

  <div class="mb-3">
    <label class="form-label">Segundo Apellido</label>
    <input type="text" class="form-control" name="segundoApellido" placeholder="Escriba el segundo apellido">
  </div>

  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escriba el nombre">
  </div>

  <div class="mb-3">
    <label class="form-label">Cedula</label>
    <input type="text" class="form-control" name="cedula" placeholder="Escriba su cedula de identidad">
  </div>

  <div class="mb-3">
    <label class="form-label">Edad</label>
    <input type="text" class="form-control" name="edad" placeholder="Escriba la edad">
  </div>

  <div class="mb-3">
    <label class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" placeholder="Escriba el telefono">
  </div>

  <div class="mb-3">
    <label class="form-label">Correo</label>
    <input type="text" class="form-control" name="correo" placeholder="Escriba el correo">
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
    <?php
    echo form_close();
    ?>

   
    </div>
  </div>
</div>
