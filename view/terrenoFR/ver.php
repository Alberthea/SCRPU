<!DOCTYPE html>
<html>
<head>
	<title>Detalle del Terreno</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle del Terreno Frente a Ruta</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>Código: </strong><?php echo $this->terrenoFR->getAtributo('PU07IDTFR');?></li>
						<li class="list-group-item"><strong>Nombre del Terreno Frente a Ruta: </strong><?php echo $this->terrenoFR->getAtributo('PU07NOMTFR');?></li>
						
					</ul>
					<a href="?c=terrenoFR&m=index" class="btn btn-default" role="button">Regresar</a>  

				</div>
			</div>
		</div>
	</div>
</body>
</html>
