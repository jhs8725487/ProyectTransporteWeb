<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
        echo form_open_multipart('conductor/agregarbd2');

    ?>
    <H1>Introduzca Datos Del Transporte</H1>
<div class="mb-3">
    <label class="form-label">Tipo de transporte </label>
    <input type="text" class="form-control" name="tipo" placeholder="Escriba el tipo de transporte">
  </div>

  <div class="mb-3">
    <label class="form-label">Color de transporte</label>
    <input type="text" class="form-control" name="color" placeholder="Escriba el color del transporte">
  </div>

  <div class="mb-3">
    <label class="form-label">Numero de placa</label>
    <input type="text" class="form-control" name="placa" placeholder="Escriba el numero de placa">
  </div>

  <div class="mb-3">
    <label class="form-label">Marca del transporte</label>
    <input type="text" class="form-control" name="marca" placeholder="Escriba la marca del transporte">
  </div>

  <div class="mb-3">
    <label class="form-label">Modelo del transporte</label>
    <input type="text" class="form-control" name="modelo" placeholder="Escriba el modelo del transporte">
  </div>

  <button type="submit" class="btn btn-primary">Agregar</button>
    <?php
    echo form_close();
    ?>

   
    </div>
  </div>
</div>
