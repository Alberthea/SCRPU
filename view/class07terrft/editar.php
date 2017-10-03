
<!DOCTYPE html>
<html>
<head>
	<title>Editar Terreno Frente a Ruta</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <center>

    <h2>Editar Terreno Frete a Ruta: <?php echo $this->class07terrft->getAtributo('PU07NOMTFR');?> </h2>
  </center>
  <div class="container">
    <form action="?c=class07terrft&m=editar" method="post">
      <div class="form-group">
        <label for="PU07IDTFR">Código del Terreno Frete a Ruta:</label>
        <input type="text" class="form-control" id="PU07IDTFR" name="PU07IDTFR" value="<?php echo $this->class07terrft->getAtributo('PU07IDTFR');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU07NOMTFR">Nombre del Terreno Frete a Ruta:</label>
        <input type="text" class="form-control" id="PU07NOMTFR" name="PU07NOMTFR" value="<?php echo $this->class07terrft->getAtributo('PU07NOMTFR');?> " >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=class07terrft&m=index" class="btn btn-danger" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>
