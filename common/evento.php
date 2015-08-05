<?php
include_once"functionConect.php";
conectar();

	function selectEvento($ev_id){
		
		mysql_query("SET NAMES 'utf8'");
		
		
		$sql= mysql_query( "Select * from eventos WHERE ev_id= '$ev_id'") or die(mysql_error());
		
		$resultado=array();
		while($fila = mysql_fetch_assoc($sql)) { //loop the rows returned from db
        	$resultado[] = $fila; //add row to array
		}
		return $resultado;
	}
		
	function verificarDcto($codigo){
		
		mysql_query("SET NAMES 'utf8'");
		
		
		$sql= mysql_query("SELECT codigo,usados,monto FROM cod_dcto 
				WHERE codigo= '$codigo'
				  AND usados < stock ");
				  
		$resultado=array();
		while($fila = mysql_fetch_assoc($sql)) { //loop the rows returned from db
        	$resultado[] = $fila; //add row to array
		}
		
		return $resultado;
	
	}
	
?>

