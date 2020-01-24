<h1 class="page-header">Integracion</h1>
<p>Ejercicio 2</p>
<?php
 $fecha="";
 $fecha2="";
 $periodo="";
 $activos=0;
 $inactivos=0;
if (!empty($_POST['txtFechaIn'])) {
   $fecha= $_POST['txtFechaIn'];
}
if (!empty($_POST['txtFechaFin'])) {
    $fecha2= $_POST['txtFechaFin'];
 }
 


?>
<form id="frm-alumno" action="?c=cliente&a=Index" method="post" enctype="multipart/form-data">
 
<div class="row">
  <div class="col-xs-3">
  <span class="input" id="basic-addon1">Fecha inicio</span>
  <input type="text" class="form-control"  id="txtFechaIn"   name="txtFechaIn"  placeholder="Fecha inicio" aria-describedby="basic-addon1" readonly>
</div>
  <div class="col-xs-3"> <span class="input"  id="basic-addon1">Fecha Fin</span>
  <input type="text" class="form-control" id="txtFechaFin"  name="txtFechaFin"   placeholder="Fecha Fin" aria-describedby="basic-addon1" readonly>
</div>
<div class="col-xs-3">
<br>
<button type="submit" class="btn btn-default" onclick="buscarProFecha()">Buscar</button>
</div>

</div>
</form>


<table class="table  table-striped  table-hover" id="tabla">
    <thead>
        <tr>
        <th style="width:120px; background-color: #5DACCD; color:#fff">DNI</th>
            <th style="width:180px; background-color: #5DACCD; color:#fff">Nombre</th>
            <th style=" background-color: #5DACCD; color:#fff">Apellido</th>
            <th style=" background-color: #5DACCD; color:#fff">Status</th>
            <th style="width:120px; background-color: #5DACCD; color:#fff">Fecha</th>            
         
        </tr>
    </thead>
    <tbody id="tdDatos">
    <?php foreach($this->model->Listar($fecha,$fecha2) as $r): ?>
        <tr>
         <td><?php  echo $r->dni; ?></td>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Apellido; ?></td>
            <td><?php echo $r->Status; ?></td>
            <td><?php echo $r->fecha; ?></td>
           
           <?php $datos[]= $r->Status;
           $myString = substr($r->fecha, 0, -3);
           $datos2[$myString][]= $r->Status;
          
   
            echo "<br>";
              if($r->Status=='Activo'){
               $activos++;
              }
            if($r->Status=='Bloqueado'){
                $inactivos++;
            }
            
           ?>
        </tr>
    <?php endforeach; ?>
    <?php     
 foreach ($datos2 as $clave => $valor) {
       
       echo "
       <table class='table table-bordered'>
           <thead>
             <tr>
               <th>Periodo</th>
               <th>Activos</th>
               <th>Bloqueados</th>
               <th>Total</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>";
               $activos2=0;
               $inactivos2=0;
               $cantidad=0;
               foreach ($valor as $clave2 => $valor2) {
                 
                  $cantidad ++;
                  if( $valor2=='Activo'){
                    $activos2++;
                   }
                 if( $valor2=='Bloqueado'){
                     $inactivos2++;
                 }
                 
               }
               echo $clave; echo "</td>
               <td>"; echo ($activos2*100)/$cantidad; echo "</td>
               <td>"; echo($inactivos2*100)/$cantidad; echo "</td>
               <td>"; echo $cantidad; echo "</td>
             </tr>
           </tbody>
         </table>";
    }  ?>

    
    </tbody>
</table> 


<table class="table table-bordered">
    <thead>
      <tr>
        <th>Periodo</th>
        <th>Activos</th>
        <th>Bloqueados</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php if($fecha==''){$periodo="Todo";}else{ $periodo= $fecha."--".$fecha2; } echo $periodo;?></td>
        <td><?php echo ($activos*100)/count($datos); ?></td>
        <td><?php echo($inactivos*100)/count($datos); ?></td>
        <td><?php echo count($datos); ?></td>
      </tr>
    </tbody>
  </table>

</body>
<script  src="assets/js/datatable.js">  

</script>


</html>
