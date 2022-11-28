<?php
include_once './modelo/conexion.php';

//$query_consulta = "SELECT *  FROM pago WHERE ClienteId	 = 1 ";
//$consulta = mysqli_query($con, $query_consulta);

?>

<!DOCTYPE html>
<html lang="en">

<head>
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
      <a class="navbar-brand" href="#">Uniformes D'Katia</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menú</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" href="#">Pedidos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Cotizaciones
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#crear-perfil">Hacer
                    cotizacion</a></li>
                    <li><a class="dropdown-item" href="cotizacion.php">Visualizar cotizaciones</a></li>

              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="#" data-bs-toggle="modal" data-bs-target="#ver-perfil">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="login.php">Login</a>
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

  <div class="modal fade" id="crear-perfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Cotizacion</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="./modelo/agregarcot.php" method="POST" class="row g-3 needs-validation was-validated">
            <div class="col-md-8">
              <label for="nombre_empresa" class="form-label">Nombre empresa</label>
              <input type="text" name="txtEmpresa" class="form-control" id="nombre_empresa" required="">
              <div class="valid-feedback">
                OK!
              </div>
              <div class="invalid-feedback">
                Por favor ponga su nombre o empresa
              </div>
            </div>
            <div class="col-md-5">
              <label for="nombre_cotizador" class="form-label">Su nombre</label>
              <input type="text" name="txtNombre" class="form-control" id="nombre_cotizador" required>
              <div class="valid-feedback">
                OK!
              </div>
              <div class="invalid-feedback">
                Por favor escriba el nombre de quien hace el pedido
              </div>
            </div>

            <div class="col-md-5">
              <label for="nombre_cotizador" class="form-label">Apellido</label>
              <input type="text" name="txtApellido" class="form-control" id="apellido_cotizador" required>
              <div class="valid-feedback">
                OK!
              </div>
              <div class="invalid-feedback">
                Por favor escriba el nombre de quien hace el pedido
              </div>
            </div>

            <div class="col-md-5">
              <label for="num_cot" class="form-label">Número de contacto</label>
              <input type="text" name="txtNum" class="form-control" id="num_cot" required>
              <div class="invalid-feedback">
                Numero a 10 digitos.
              </div>
            </div>

            <div class="col-md-5">
              <label for="correo" class="form-label">Correo de contacto</label>
              <input type="text" name="txtCorreo" class="form-control" id="correo" required>

              <div class="invalid-feedback">
                Por favor escriba el un correo para contactarlo
              </div>
            </div>

            <div class="col-md-5">
              <label for="RFC" class="form-label">RFC</label>
              <input type="text" name="txtRfc" class="form-control" id="RFC" required="">

              <div class="invalid-feedback">
                Aqui el RFC
              </div>
            </div>

            <div class="col-md-6">
              <label for="Cantidad_prendas" class="form-label">Cantidad de prendas</label>
              <input type="text" name="txtCantidad" class=" form-control" id="Cantidad_prendas" required="">

            </div>


            <div class="col-15">
              <label for="Descripcionp" class="form-label">Descripcion</label>
              <input type="text" name="txtDescripcion" class="form-control" id="Descripcionp" required>

            </div>

            <div class="col-md-5">
              <label for="MEntrega" class="form-label">Metodo de entrega</label>
              <select name="selEntrega" class="form-select" id="MEntrega" required="">
                <option selected="" disabled="" value="">Escoger</option>
                <option>Recoger en matriz</option>
                <option>Entrega directa</option>
                <option>Paqueteria</option>
              </select>
              <div class="invalid-feedback">
                Seleccione una opcion
              </div>
            </div>



            <!-- Fin del formulario -->

        </div>
        <div class="modal-footer">

          <!--botón para guardar los datos -->
          <button class="btn btn-primary" name="btn-agr-cot" type="submit">Guardar</button>
          <!-- -->

          <!-- En este botón cierra el modal -->
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <!-- -->


        </div>
        </form>
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
  <div class="modal fade" id="ver-perfil" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
              <span><? php // echo $fila['ClienteNom']; 
                    ?> nombre</span>
              <p> mail<?php //echo $fila['mail']; 
                      ?></p>
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

  <div class="modal fade" id="ver-cotizaciones" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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