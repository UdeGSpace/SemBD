<?php
    session_start();

    if (!$_SESSION['idU']) {
        header("Location: ./login.php");
    }
    require "./controlador/control.php";
    $con = conecta();
    $idU = $_SESSION['idU'];
?>
<html>
    <link href="cotizaciones.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Uniformes D'Katia</a>
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
    </nav>
    <body>
        <table align= "center">
            <tr>
                <th>Id</th>
                <th>Costo</th>
                <th>Entrega</td>
                <th>Fecha de Solicitud</th>
            </tr>
            <?php 
                $query = "select cotizacionId,Coste,Entrega,createdAt from Cotizaciones where ClienteId ='$idU'";
                if($sql = $con->query($query)){
                    while($result = $sql->fetch_assoc()){
                        echo $result["cotizacionId"];
                        echo $result["Coste"];
                        echo $result["Entrega"];
                        echo $result["createdAt"];
                    } 
                } 
                $sql->close();
            ?>
            </table>
    </body>
  </html>