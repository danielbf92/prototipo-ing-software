
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="menu.js"></script>
    <title>Prototipo</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Sistema de requerimientos</a>
</nav>
<div class="container-fluid">
<div class="row">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
      <!--Menu-->
      <nav class="Menu" class="col-md-2 d-none d-md-block bg-light sidebar" style="height: 10000px">
      </nav>
      <!---->

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Roles</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button type="button" class="btn btn-success" id="agregarNuevo">Agregar</button>
              </div>
            </div>
          </div>
<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Usuarios</h3>
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-bordered table-responsive-md table-striped text-center" id= "rolesTable">
        <thead>
          <tr>
            <th class="text-center">Usuario</th>
            <th class="text-center">Tipo Usuario</th>
            <th class="text-center">Proceso</th>
			<th class="text-center">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <!--<tr>
            <td class="pt-3-half">Stephanía</td>
            <td class="pt-3-half">Cedeno</td>
            <td class="pt-3-half">Prendas</td>
			<td class="pt-3-half">niacd77@gmail.com</td>
            <td class="pt-3-half">Administrador</td>
            <td>
              <span class="table-remove"><button type="button" id = "btnRemove"
                  class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </td>
          </tr>
		   <tr>
            <td class="pt-3-half"><a href="Roles.html">Raquel</a></td>
            <td class="pt-3-half">Mora</td>
            <td class="pt-3-half">Alvarado</td>
			<td class="pt-3-half">RaqueAlva@gmail.com</td>
            <td class="pt-3-half">Aprobador</td>
            <td>
              <span class="table-remove"><button type="button" id = "btnRemove"
                  class="btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
</div>

          </div>
        </main>
</div>
</div>
</div>    
   
<script>
$("#agregarNuevo").click(function () {
      window.location = "Roles.php";
    });
	
	
$(document).ready(function(){
	
RolesGridFillGrid();
	
});
  
function RolesGridFillGrid() {
	
	
	

var usuarios = [];
        $.getJSON( "FileRol.json", function( json )
        {       
		var datos = json;
		for(i in datos)
          {

	 $("#rolesTable").append('<tr>' + 
		'<td align="center" style="dislay: none;">' + datos[i].usuario + '</td>'+
		'<td align="center" style="dislay: none;">' + datos[i].tipoUsuario + '</td>'+
		'<td align="center" style="dislay: none;">' + datos[i].proceso + '</td>'+
		'<td><span class="table-remove"><button type="button" id = "btnRemove"  class="btnRemove btn btn-danger btn-rounded btn-sm my-0">Eliminar</button></span></td></tr>');
					
		}
	 $(document.body).on('click',".btnRemove",function(){
             $(this).closest('tr').remove();
    });
	 });

}






</script>
</body>

</html>