<!DOCTYPE html>
<html>
<head>
	<title>Detalle planregulador</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle del planregulador</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>ID PLAN REGULADOR: </strong><?php echo $this->planregulador->getAtributo('PU26IDPLAN');?></li>
						<li class="list-group-item"><strong>DESCIPCION: </strong><?php echo $this->planregulador->getAtributo('PU26PLNDESC');?></li>
						
					</ul>
					<a href="?c=planregulador&m=index" class="btn btn-default" role="button">Regresar</a>  

				</div>
			</div>
		</div>
	</div>
</body>
</html>