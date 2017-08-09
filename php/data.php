<?php

include "conexion.php";

$user_id=null;
$sql="SELECT * FROM usuarios";
			$consulta= $conexion->prepare($sql);
			$consulta->execute();
			$resultados=$consulta->fetchAll();

$query = $conexion->query($sql);
$data=array();
$data["data"]="";

if (count($query)>0) {
	foreach ($query as $key => $value) {
	$data["data"][]=$value;

}
}





header('Content-type: application/json');
echo json_encode($data);
?>