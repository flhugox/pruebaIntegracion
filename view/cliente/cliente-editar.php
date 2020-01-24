<h1 class="page-header">
    <?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?>
</h1>
<ol class="breadcrumb">
  <li><a href="?c=cliente">Cliente</a></li>
  <li class="active"><?php echo $cliente->id != null ? $cliente->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-alumno" action="?c=cliente&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $cliente->id; ?>" />
      <div class="form-group">
        <label>DNI</label>
        <input type="text" name="dni" value="<?php echo $cliente->dni; ?>" class="form-control" placeholder="Ingrese su dni" required>
    </div>
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $cliente->Nombre; ?>" class="form-control" placeholder="Ingrese su nombre" required>
    </div>
    
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" name="Apellido" value="<?php echo $cliente->Apellido; ?>" class="form-control" placeholder="Ingrese su apellido" required>
    </div>
    
    <div class="form-group">
        <label>Status</label>
        <input type="text" name="Status" value="<?php echo $cliente->Status; ?>" class="form-control" placeholder="Ingrese su Status electrónico" required>
    </div>
     <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="telefono" value="<?php echo $cliente->telefono; ?>" class="form-control" placeholder="Ingrese su telefono" required>
    </div>
        
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-primary">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>