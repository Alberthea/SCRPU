<?php 
require_once 'conexion.php';

class PU04INSPECCION extends Conexion
{
	private $PU04IDTRA;
	private $PU04FETRA;
	private $PU07IDTFR;
	private $PU04NORTE;
	private $PU04ESTE;
	private $PU04ALTITUD;
	private $PU12IDTDESEC;
	
	private $conexion;
	
	function __construct()
	{
		$this->conexion = new Conexion();
	}
	
	public function setAtributo($nombre, $valor)
	{
		$this->$nombre = ucfirst(strtolower($valor)); 
	}

	public function getAtributo($nombre)
	{
		return $this->$nombre;
	}

	public function listar()
	{
		$sql = "CALL SP04_REGISTROTRA_MOSTRAR();";
		$result = $this->conexion->consultaRetorno($sql);
		return $result;
	}

	public function guardar($pu09tradeg,$pu10aspbio,$pu13aap,$pu05actdes)
	{
		$sql = "call SP04_REGISTROTR_GUARDAR('$this->PU04IDTRA','$this->PU04FETRA','$this->PU04NORTE',
		'$this->PU04ESTE','$this->PU04ALTITUD');";
		$this->conexion->consultaSimple($sql);
		
		foreach ($pu07terrft as $idtfr) {			
			$sql1 = "call SP07_TERRFT_TRA_GUARDAR('$this->PU04IDTRA','$idtfr');";
			$this->conexion->consultaSimple($sql1);
		}

		foreach ($pu07terrft as $idtfr) {			
			$sql2 = "call SP07_TERRFT_TRA_GUARDAR('$this->PU04IDTRA','$idtfr');";
			$this->conexion->consultaSimple($sql2);
		}
		//Inserción de aspecto a la tabla pivote
		foreach ($pu09tradeg as $tradegId) {			
			$sql3 = "call SP09_DESCEG_TRA_GUARDAR('$this->PU04IDTRA','$tradegId');";
			$this->conexion->consultaSimple($sql3);
		}
		//Inserción de pu10aspbio a la tabla pivote
		foreach ($pu10aspbio as $aspbioId) {			
			$sql4 = "CALL SP10_ASPBIO_TRA_GUARDAR('$this->PU04IDTRA','$aspbioId');";
			$this->conexion->consultaSimple($sql4);
		}
		//Inserción de pu13aap a la tabla pivote
		foreach ($pu13aap as $pu13aapId) {			
			$sql5 = "CALL SP13_AAREP_TRA_GUARDAR('$this->PU04IDTRA','$pu13aapId');";
			$this->conexion->consultaSimple($sql5);
		}
		//Inserción de pu13aap a la tabla pivote
		foreach ($pu05actdes as $pu05actdesId) {			
			$sql6 = "CALL SP06_ACTDES_TRA_GUARDAR('$this->PU04IDTRA','$pu05actdesId');";
			$this->conexion->consultaSimple($sql6);
		}
	}
}
?>