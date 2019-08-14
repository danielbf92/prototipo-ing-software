<?php
session_start($_POST['usuario']);
echo session_id();
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
  <script src="js/menu.js"></script>


  <title>Prototipo</title>
</head>

<body>
<form method="post" style="width:40%; margin-left:25%;margin-top: 5%;">
  <div class="form-group" >
    <label for="exampleInputEmail1">Usuario</label>
    <input type="email" id="user" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <span class="emailHelp"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">contraseña</label>
    <input type="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
	<span class="contrasena"></span>
  </div>
  <submit type="button" id="login" class="btn btn-primary">Submit</button>
</form>
<script>

$("#login").click(function () {
UsuariosActve();
	
});
  
function UsuariosActve() {
var usuario = document.getElementById('user').value;
var contrasena = document.getElementById('password').value;		
        $.getJSON( "UsuariosActive.json", function( json )
        {       
		var existeusuario = "no";
		var contrasenacorrecta = "";
		var datos = json;
		for(i in datos)
          {

	 if(datos[i].user == usuario ){
		existeusuario = "si";
			 if(datos[i].password == contrasena ){
					contrasena = "si";
			 };
	};
	
		  };
		  	if(existeusuario == 'no'){
		$( ".emailHelp" ).append( "<small id='emailHelp' class='emailHelp form-text text-muted'>El usuario no existe</small>" );
		
	}else{
			if(contrasena == 'si'){
				validausuario();
			}else{
				$( ".contrasena" ).append( "<small id='emailHelp' class='emailHelp form-text text-muted'>la contraseña es invalida</small>" );
			}
		
	}
	 });

}
function validausuario() {
	var registrado = "no";
	var usuario = document.getElementById('user').value;
        $.getJSON( "FileRol.json", function( json )
        {       
		var datos = json;
		for(i in datos)
          {

		if(datos[i].usuario == usuario){
			registrado = "si"
		} 
		
		}
		if(registrado == "no"){
            $( ".emailHelp" ).append( "<small id='emailHelp' class='emailHelp form-text text-muted'>El Usuario no se encuentra registrado en el sistema</small>" );

		}else{
			
			window.location = "Proyecto.php";
		}

	 });
	
	
}


</script>


</body>

</html>