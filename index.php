
<html>
	<head>
		<title>.: CRUD :.</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>VER ENTRADAS</h2>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" id="registroRut" method="post" action="php/agregar.php">
  <div class="form-group">

  <div class="form-group">
    <label for="rut">Rut</label>
    <input type="text" class="form-control" name="rut" id="rut" data-val="true" onfocusout="Valida_Rut(this)" required>
  </div>
    <label for="name">Nombre</label>
    <input type="text" class="form-control" onkeydown="return alphaOnly(event);" name="nombre" id="nombre" required>
  </div>
  <div class="form-group">
    <label for="lastname">Apellido</label>
    <input type="text"  class="form-control" onkeydown="return alphaOnly(event);" name="apellido"  id="apellido" required>
  </div>
  
  <div class="form-group">
    <label for="pais">Pais</label>
    <input type="text" class="form-control" onkeydown="return alphaOnly(event);" id="pais" name="pais" >
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57'  class="form-control" name="telefono" >
  </div>

  <button type="submit" class="btn btn-default" id="agregar">Agregar</button>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tablaUsuario.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/validaciones.js"></script>
	</body>
</html>