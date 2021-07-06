<div class="container">
  <div class="row">  
    <div class="col-md-12">


    
    <?php
    foreach($infotransporte->result() as $row){
        echo form_open_multipart('conductor/modificarbd2');

    ?>
 <input type="hidden" name="idTransporte" value="<?php echo $row->idTransporte; ?>">
<div class="mb-3">
    <label class="form-label">Tipo</label>
    <input type="text" class="form-control" name="tipo" value="<?php echo $row->Tipo; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Color</label>
    <input type="text" class="form-control" name="color" value="<?php echo $row->Color; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Numero de placa</label>
    <input type="text" class="form-control" name="placa" value="<?php echo $row->NumeroPlaca; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Marca</label>
    <input type="text" class="form-control" name="marca" value="<?php echo $row->Marca; ?>">
  </div>

  <div class="mb-3">
    <label class="form-label">Modelo</label>
    <input type="text" class="form-control" name="modelo" value="<?php echo $row->Modelo; ?>">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
    <?php
    echo form_close();
    }
    ?>

   
    </div>
  </div>
</div>
