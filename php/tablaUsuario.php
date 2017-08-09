
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.js"></script>

<script type="text/javascript" language="javascript">
        $(document).ready(function() {
            var datatable = $('#mytable').DataTable({
            	processing: true,
        		serverSide: false,

                ajax: "php/data.php",
                columns: [
                    {data:"rut"},
                    {data:"nombre"},
                    {data:"apellido"},
                    {data:"telefono"},
                    {data:"pais"},

                 {
			       "data": null,
			       "render": function(data, type, full, meta){
			          return '<button onClick=eliminarUsuario('+full["id"]+'); class="btn btn-md btn-danger" data-id="'+full["id"]+'"><i class="glyphicon glyphicon-trash"></i></button> <a href="editar.php?id='+full["id"]+'" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-user"></i></a>';
			       }
			    }
                ]
            });
        });
function eliminarUsuario(e)
{
	p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+e;

			}
}
       
    </script>

<table id="mytable" >
        <thead>
        <tr>
		<th>Rut</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>telefono</th>
		<th>pais</th>
		<th>Acciones</th>
		</tr>
		</thead>
		<tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>        
          </tbody>

    </table>