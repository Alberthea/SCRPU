<!DOCTYPE html>
<html>
<head>
  <title>Nueva Afectación de Áreas de protección</title>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
  <center>
    <h2>Agregar Nueva Afectación de Áreas de protección</h2>
  </center>
  <div class="container">
    <form action="?c=class13aarep&m=agregar" method="post">
    
      <div class="form-group">
        <label for="PU13IDAAP">PU13IDAAP</label>
        <input type="text" class="form-control" id="PU13IDAAP" name="PU13IDAAP">
      </div>

      <div class="form-group">
        <label for="PU13DESCAAP">PU13DESCAAP</label>
        <input type="text" class="form-control" id="PU13DESCAAP" name="PU13DESCAAP">
      </div>
      <button type="submit" class="btn btn-success">Guardar</button> 
      <a href="?c=class13aarep&m=index" class="btn btn-default" role="button">Regresar</a>    
     </form>
   </div>
</body>
</html>