<?php
include "conexion2.php";
if (!empty($_GET)) 
{
$sql="SELECT * from usuarios where rut=:rut";
		$consulta=$conexion->prepare($sql);
		$consulta->bindParam(":rut",$_GET["rut"],PDO::PARAM_STR);
		$consulta->execute();
		$val=$consulta->fetchAll();
		
		if (count($val)) {
			$data["success"]=true;
		}else
		{
			$data["success"]=false;

		}

header('Content-type: application/json');

echo json_encode($data);
}