<!DOCTYPE html>
<html lang="en">

<head>
<?php
    session_start();

    if ($_SESSION['idU']) {
        //header("Location: ./bienvenido.php");
    }
?>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link href="https://unpkg.com/pattern.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">

  <title>Uniformes D'Katia</title>
  <link href="main.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="js/jquery-3.6.0.min.js"></script>

  <link rel="shortcut icon" href="index.html">
</head>
<body>

  <nav class="navbar navbar-dark bg-dark fixed-top">

    <div class="container-fluid">
      <a class="navbar-brand" href="./index.html">Uniformes D'Katia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#">Pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Cotizaciones
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#crear-perfil">Hacer
                    cotizacion</a></li>
                <li><a class="dropdown-item" href="cotizacion.php">Visualizar cotizaciones</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#" data-bs-toggle="modal"
                data-bs-target="#ver-perfil">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="login.php" >Login</a>
            </li>

          </ul>

        </div>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>

  <div class="modal fade" id="crear-perfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cotizacion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form class="row g-3 needs-validation was-validated" novalidate="">
            <div class="col-md-6">
              <label for="validationCustom01" class="form-label">Nombre empresa</label>
              <input type="text" class="form-control" id="validationCustom01" required="">
              <div class="valid-feedback">
                OK!
              </div>
              <div class="invalid-feedback">
                Por favor ponga su nombre o empresa
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom02" class="form-label">Su nombre</label>
              <input type="text" class="form-control" id="validationCustom02" required="">
              <div class="valid-feedback">
                OK!
              </div>
              <div class="invalid-feedback">
                Por favor escriba el nombre de quien hace el pedido
              </div>
            </div>

            <div class="col-md-5">
              <label for="validationCustom03" class="form-label">Número de contacto</label>
              <input type="text" class="form-control" id="validationCustom03" required="10">
              <div class="invalid-feedback">
                Numero a 10 digitos.
              </div>
            </div>

            <div class="col-md-5">
              <label for="validationCustom02" class="form-label">Correo de contacto</label>
              <input type="text" class="form-control" id="validationCustom02" required="">

              <div class="invalid-feedback">
                Por favor escriba el un correo para contactarlo
              </div>
            </div>

            <div class="col-md-5">
              <label for="validationCustom02" class="form-label">RFC</label>
              <input type="text" class="form-control" id="validationCustom02" required="">

              <div class="invalid-feedback">
                Aqui el RFC
              </div>
            </div>

            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Cantidad de prendas</label>
              <input type="text" class="form-control" id="validationCustom05" required="">

            </div>


            <div class="col-15">
              <label for="validationCustom03" class="form-label">Descripcion</label>
              <input type="text" class="form-control" id="validationCustom03" required="10">

            </div>

            <div class="col-md-5">
              <label for="validationCustom04" class="form-label">Metodo de entrega</label>
              <select class="form-select" id="validationCustom04" required="">
                <option selected="" disabled="" value="">Escoger</option>
                <option>Recoger en matriz</option>
                <option>Entrega directa</option>
                <option>Paqueteria</option>
              </select>
              <div class="invalid-feedback">
                Seleccione una opcion
              </div>
            </div>


          </form>
          <!-- Fin del formulario -->

        </div>
        <div class="modal-footer">

          <!--botón para guardar los datos -->
          <button class="btn btn-primary" type="submit" data-bs-toggle="modal"
            data-bs-target="#guardado">Guardar</button>
          <!-- -->

          <!-- En este botón cierra el modal -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <!-- -->


        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="guardado" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Contenido guardado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>:)</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
          <!-- En este botón cierra el modal -->

        </div>
      </div>
    </div>
  </div>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="ver-perfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Perfil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="img"></div>
            <div class="info">
              <span>Nombre</span>
              <p>Correo</p>
            </div>
            <a href="#">Button</a>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="ver-cotizaciones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cotizaciones</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card2">Estatus </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

</body>

</html>