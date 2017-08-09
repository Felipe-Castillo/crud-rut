<?php
include "conexion.php";

$user_id=null;
$sql="SELECT * FROM usuarios WHERE id=:id";
      $consulta= $conexion->prepare($sql);
      $consulta->bindParam(":id",$_GET["id"],PDO::PARAM_STR);
      $consulta->execute();
      $resultados=$consulta->fetchAll();
$i=0;
if (count($resultados)>0)
{
foreach ($resultados as $key => $value)
{
  $userA[$i]["id"]=$value["id"];
  $userA[$i]["pais"]=$value["pais"];
  $userA[$i]["nombre"]=$value["nombre"];
  $userA[$i]["apellido"]=$value["apellido"];
  $userA[$i]["telefono"]=$value["telefono"];
  $userA[$i]["rut"]=$value["rut"];

  $i++; 
}
}

?>

<?php if(count($resultados)>0):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">

  <div class="form-group">
    <label for="rut">Rut</label>
    <input type="text" class="form-control" onfocusout="Valida_Rut(this)" value="<?php echo $userA[0]["rut"]; ?>" data-val="true" name="rut" required >
  </div>
    <label for="name">Nombre</label>
    <input type="text" class="form-control" value="<?php echo $userA[0]["nombre"]; ?>" name="nombre" id="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text" class="form-control" id="apellido" value="<?php echo $userA[0]["apellido"]; ?>" name="apellido"  required>
  </div>
  <div class="form-group">
    <label for="pais">Pais</label>
    <input type="text" class="form-control" id="pais" value="<?php echo $userA[0]["pais"]; ?>" name="pais" required>
  </div>
  
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' class="form-control" value="<?php echo $userA[0]["telefono"]; ?>" name="telefono" required >
  </div>
<input type="hidden" name="id" value="<?php echo $userA[0]["id"]; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>