<?php $result = $this->pu09tradeg->listar(); ?>
<?php $result2 = $this->pu10aspbio->listar(); ?>
<?php $result3 = $this->pu13aap->listar(); ?>
<?php $result4 = $this->pu04inspeccion->getTodasActividades(); ?>
<?php $result5 = $this->pu07terrfr->listar(); ?>
<?php $result6 = $this->pu12tipdesec->listar(); ?>

  
 
 <div class="form-group">
       <center><h1>Agregar nuevo trámite</h1></center>
      </div>

<form action="?c=class04inspeccion&m=agregar" method="post">
  <div class="container-fluid  well   "> 
   <div class="  form-group  ">
    
       <div class="form-group">
        <label for="PU04IDTRA">Id Trámite:</label>
        <input type="text" class="form-control" id="PU04IDTRA" name="PU04IDTRA">
      </div>

</div>

      <div class="container-fluid  well   "> 
    <center><h4>Localización GPS:</h4></center>
    

  <div class="  form-group  ">
     <div class=" col-xs-2 text-left">
      
        <label for="PU04NORTE">Norte:</label>
        <input type="text" class="form-control" id="PU04NORTE" name="PU04NORTE">
        
      </div>
      <div class="col-xs-2 text-left">
          
        <label for="PU04ESTE">Este:</label>
        <input type="text" class="form-control" id="PU04ESTE" name="PU04ESTE">
      
      </div>
      <div class="col-xs-2 text-left">
         
        <label for="PU04ALTITUD">Altitud:</label>
        <input type="text" class="form-control" id="PU04ALTITUD" name="PU04ALTITUD">
      
      </div> </div>
      </div>


      <div class="container-fluid  well   "> 
      <div class="form-group">
        <p><b>Descripción del Espacio Geográfico :</b></p>
      <?php while ($row = mysqli_fetch_array($result)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU09IDDEG'];?>" name="pu09tradeg[]"><?php echo $row['PU09DESCREG']; ?>
        </label>
      <?php endwhile; ?>
      </div>
      </div><br>

        <div class="container-fluid  well   "> 
       <div class="form-group">
        <p><b>Aspectos Biofísicos :</b></p>
      <?php while ($row = mysqli_fetch_array($result2)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU10IDASBIO'];?>" name="pu10aspbio[]"><?php echo $row['PU10DESCABIO']; ?>
        </label>
      <?php endwhile; ?>
      </div>
      </div><br>

<div class="container-fluid  well   "> 
      <div class="form-group">
        <p><b>Afectación de Áreas de Protección :</b></p>
      <?php while ($row = mysqli_fetch_array($result3)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU13IDAAP'];?>" name="pu13aap[]"><?php echo $row['PU13DESCAAP']; ?>
        </label>
      <?php endwhile; ?>
      </div>
      </div><br>


      <div class="container-fluid  well   "> 
       <div class="form-group">
        <p><b>Actividades a Desarrollar :</b></p>
      <?php while ($row = mysqli_fetch_array($result4)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU06IDACTDES'];?>" name="pu06idactdes[]"><?php echo $row['PU06DESAD']; ?>
        </label>
      <?php endwhile; ?>
      </div>
    </div><br>

     <div class="container-fluid  well   "> 
       <div class="form-group">
        <p><b>Terreno Frente a Ruta :</b></p>
      <?php while ($row = mysqli_fetch_array($result5)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU07IDTFR'];?>" name="pu07terrfr[]"><?php echo $row['PU07NOMTFR']; ?>
        </label>
      <?php endwhile; ?>
      </div>
    </div><br>

    <div class="container-fluid  well   "> 
       <div class="form-group">
        <p><b>Tipo de Desarrollo en el Sector :</b></p>
      <?php while ($row = mysqli_fetch_array($result6)):?>
        <label class="checkbox-inline">
          <input type="checkbox" value="<?php echo $row['PU12IDTDESEC'];?>" name="pu12tipdesec[]"><?php echo $row['PU12TIPODES']; ?>
        </label>
      <?php endwhile; ?>
      </div>
    </div><br>


    



      <button type="submit" class="btn btn-success">Guardar</button> 
      <a href="?c=class04inspeccion&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>

