<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Ubicación Clases</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>


<body>
  <center>
    <h2>Agregar Ubicación Clases</h2>
  </center>
  <div class="container-fluid">
    <form action="?c=class34clases&m=agregar" method="post">
    
      <div class="form-group">
        <label for="PU34IDCLAS">Código de Clase:</label>
        <input type="text" class="form-control" id="PU34IDCLAS" name="PU34IDCLAS">
      </div>

      <div class="form-group">
        <label for="PU34DESCLA">Descripción de Clase:</label>
        <input type="text" class="form-control" id="PU34DESCLA" name="PU34DESCLA">
      </div>
      <button type="submit" class="btn btn-success">Guardar</button> 
      <a href="?c=class34clases&m=index" class="btn btn-danger" role="button">Regresar</a>    
     </form>
   </div>
     <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>