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
          <h1 class="h2">Agregar Requerimiento</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button type="button" class="btn btn-success">Guardar</button>
              <button type="button" class="btn btn-danger">Eliminar</button>
              <button type="button" class="btn btn-primary"><a href="RequerimientosGrid.php" class="button"
                  style="color:#ffffff !important">Volver</a></button>
            </div>
          </div>
        </div>

        <form>
          <form>
            <div class="form-group">
              <label for="exampleFormControlInput1">Agrega Requerimiento</label>
              <select class="form-control" id="exampleFormControlSelect1">
                <option>Facturación</option>
                <option>Nómina</option>
              </select>
            </div>
			<div class="form-group">
                <label for="exampleFormControlInput1">Tipo de requerimiento</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Funcional</option>
                  <option>No Funcional</option>
                </select>
              </div>
          </form>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1">Id</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nombre</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label for="exampleFormControlInput1">Dependecia de requerimiento</label>
                <input type="email" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Prioridad</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Alta</option>
                  <option>Media</option>
                  <option>Baja</option>
                </select>
              </div>  
            </div>
          </div>
        </form>
        <form>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Requerimiento</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>

        <!--Tabla de usuarios-->
        <div class="card">
          <h6 class="card-header text-center font-weight-bold text-uppercase py-4" style="padding: 10px !important;">
            Usuarios en el proceso</h6>
          <div class="card-body">
            <div id="table" class="table-editable">
              <div class="form-group">
                <div class="input-group mb-3">
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Stephania</option>
                      <option>clarisa</option>
                      <option>Ricardo</option>
                    </select>
                  <div class="input-group-append">
                    <button class="input-group-text" id="basic-addon2">Agrega Usuario
                    </button></div>
                </div>
              </div>
              <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
                    class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
              <table class="table table-bordered table-responsive-md table-striped text-center">
                <thead>
                  <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Proceso</th>
                    <th class="text-center">Tipo de usuario</th>
                    <th class="text-center">Remove</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-3-half">Stephanía</td>
                    <td class="pt-3-half">TI</td>
                    <td class="pt-3-half">Administrador</td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="pt-3-half"><a href="Roles.html">Raquel</a></td>
                    <td class="pt-3-half">Administrativo</td>
                    <td class="pt-3-half">Aprobador</td>
                    <td>
                      <span class="table-remove"><button type="button"
                          class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>
  </div>






</body>

</html>