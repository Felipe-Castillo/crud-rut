<?php

if(!empty($_GET)){
			include "conexion.php";
			
			$sql = "DELETE FROM usuarios WHERE id=:id";
			$consulta=$conexion->prepare($sql);
			//los get utilizados son los de la clase usuario
			$consulta->bindParam(":id",$_GET["id"],PDO::PARAM_STR);
			$query=$consulta->execute();
			if($query!=null){
				print "<script>alert(\"Eliminado exitosamente.\");window.location='../index.php';</script>";
			}else{
				print "<script>alert(\"No se pudo eliminar.\");window.location='../index.php';</script>";

			}
}

?>