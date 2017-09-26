<!DOCTYPE html>
<html>
<head>
	<title>Editar ActividadDesarrollar</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
  <center>

    <h2>Editar ActividadDesarrollar: <?php echo $this->actividad_desarrollar->getAtributo('PU06DESAD');?> </h2>
  </center>
  <div class="container">
    <form action="?c=actividad_desarrollar&m=editar" method="post">
      <div class="form-group">
        <label for="PU06IDACTDES">ID</label>
        <input type="text" class="form-control" id="PU06IDACTDES" name="PU06IDACTDES" value="<?php echo $this->actividad_desarrollar->getAtributo('PU06IDACTDES');?>" readonly>
      </div>
      <div class="form-group">
        <label for="PU06DESAD">Desripción</label>
        <input type="text" class="form-control" id="PU06DESAD" name="PU06DESAD" value="<?php echo $this->actividad_desarrollar->getAtributo('PU06DESAD');?> " >
      </div>
     
      <button type="submit" class="btn btn-success">Editar</button> 
      <a href="?c=actividad_desarrollar&m=index" class="btn btn-default" role="button">Regresar</a>    
    </form>
  </div>
</body>
</html>
