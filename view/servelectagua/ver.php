<!DOCTYPE html>
<html>
<head>
	<title>Detalle Servicio de Electricidad y Agua</title>
	<link rel="stylesheet" type="text/css" href="../../datatables/Bootstrap-3.3.7/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../../datatables/Bootstrap-3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-heading">Detalle del Servicio de Electricidad y Agua</div>
				<div class="panel-body">
					<ul class="list-group">
						<li class="list-group-item"><strong>ID SERVICIO DE ELECTRICIDAD Y AGUA: </strong><?php echo $this->servelectagua->getAtributo('PU16IDSAE');?></li>
						<li class="list-group-item"><strong>DESCIPCION: </strong><?php echo $this->servelectagua->getAtributo('PU16DESCAE');?></li>
						
					</ul>
					<a href="?c=servelectagua&m=index" class="btn btn-default" role="button">Regresar</a>  

				</div>
			</div>
		</div>
	</div>
</body>
</html>
