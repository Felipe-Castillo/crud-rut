<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["telefono"]) &&isset($_POST["rut"]) &&isset($_POST["pais"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["rut"]!=""){
			include "conexion.php";
			
		$sql = "update usuarios set nombre=:nombre,apellido=:apellido,telefono=:telefono,rut=:rut,pais=:pais where id=:id";

		$consulta=$conexion->prepare($sql);
			//los get utilizados son los de la clase usuario
			$consulta->bindParam(":id",$_POST["id"],PDO::PARAM_STR);
			$consulta->bindParam(":nombre",$_POST["nombre"],PDO::PARAM_STR);
			$consulta->bindParam(":apellido",$_POST["apellido"],PDO::PARAM_STR);
			$consulta->bindParam(":telefono",$_POST["telefono"],PDO::PARAM_STR);
			$consulta->bindParam(":rut",$_POST["rut"],PDO::PARAM_STR);
			$consulta->bindParam(":pais",$_POST["pais"],PDO::PARAM_STR);

			$query=$consulta->execute();
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../index.php';</script>";

			}
		}
	}
}



?>