 <?php  
 $message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
      if(empty($_POST['usuario']))  {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
      else if(empty($_POST["tipoUsuario"]))  
      {  
           $error = "<label class='text-danger'>Enter Gender</label>";  
      }  
      else if(empty($_POST["proceso"]))  
      {  
           $error = "<label class='text-danger'>Enter Designation</label>";  
      }  
      else  
      {  
           if(file_exists('FileRol.json'))  
           {  
                $current_data = file_get_contents('FileRol.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'usuario'               =>     $_POST['usuario'],  
                     'tipoUsuario'          =>     $_POST["tipoUsuario"],  
                     'proceso'     =>     $_POST["proceso"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('FileRol.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>  


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
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
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
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="chartjs-size-monitor"
          style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
          <div class="chartjs-size-monitor-expand"
            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
          </div>
          <div class="chartjs-size-monitor-shrink"
            style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
          </div>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
          <h1 class="h2">Roles</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <!--button type="button" class="btn btn-success">Guardar</button>
              <button type="button" class="btn btn-danger">Eliminar</button-->
              <button type="button" class="btn btn-primary"><a href="RolesGrid.php" class="button"
                  style="color:#ffffff !important" id="volver">Volver</a></button>
            </div>
          </div>
        </div>
        <form method="post">
          <div class="form-group">
		   <?php   
                     if(isset($error))  
                     {  
                          echo $error;  
                     }  
                     ?> 
            <label for="usuario">Usuario</label>
            <div class="input-group mb-3">
                <select id="usuariosActive" class="form-control" id="usuario" name="usuario">

                  </select>
                <div class="input-group-append">
                  <button class="input-group-text" id="basic-addon2">Agrega
                  </button></div>
            </div>
			  <?php  
                     if(isset($message))  
                     {  
                          echo $message;  
                     }  
                     ?>  
			
          </div>
          <div class="form-group">Tipo de Usuario</label>
            <select class="form-control" id="tipoUsuario" name="tipoUsuario">
              <option>Aprobador</option>
              <option>Administrador</option>
            </select>
          </div>
          <div class="form-group">Proceso</label>
            <select class="form-control" id="proceso"  name="proceso">
              <option>Administrativo</option>
              <option>TI</option>
            </select>
          </div>
		  
		   <input type="submit" name="submit" value="Append" class="btn btn-info" /><br />                      
                    
        </form>

    </div>
    </main>
  </div>
  </div>
  </div>
  <div id="tablaUsuarios"></div>
<script>

    $("#volver").click(function () {
      window.location = "RolesGrid.php";
    });
$(document).ready(function(){
	
UsuariosActve();
	
});
  
function UsuariosActve() {
	
var usuarios = [];
        $.getJSON( "UsuariosActive.json", function( json )
        {       
		var datos = json;
		for(i in datos)
          {

	 $("#usuariosActive").append(
		'<option>' + datos[i].user + '</option>');

					
		}
	 $(document.body).on('click',".btnRemove",function(){
             $(this).closest('tr').remove();
    });
	 });

}

</script>


</body>

</html>