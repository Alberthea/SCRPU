<!DOCTYPE html>
<html>
<head>
	<title>Editar Desarrolo de Servidumbre</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
  <center>

    <h2>Editar Desarrolo de Servidumbre: <?php echo $this->class20desas->getAtributo('PU20DESCS');?> </h2>
  </center>
  <div class="container">
    <form action="?c=class20desas&m=editar" method="post">
      <div class="form-group">
        <label for="PU20IDDESAS">Código del Desarrollo:</label>
        <input type="text" class="form-control" id="PU20IDDESAS" name="PU20IDDESAS" value="<?php echo $this->class20desas->getAtributo('PU20IDDESAS');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU20DESCS">Descripción del Desarrollo:</label>
        <input type="text" class="form-control" id="PU20DESCS" name="PU20DESCS" value="<?php echo $this->class20desas->getAtributo('PU20DESCS');?>" >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=class20desas&m=index" class="btn btn-default" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>