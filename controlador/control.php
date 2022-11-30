<?php
session_start();
if (isset($_POST['loginb'])) {
    if (!empty($_POST["user"]) and !empty($_POST["password"])) {
        $num = 0;
        $user = $_POST["user"];
        $password = $_POST["password"];

        $sql = $con->query("select * from clientes where mail='$user' and password='$password'");
        $password = md5($password);
        if ($datos = $sql->fetch_object()) {
            $_SESSION["id"] = $datos->ClienteId;
            $_SESSION["nombre"] = $datos->ClienteNom;
            $_SESSION["ape"] = $datos->ClienteApe;

            header("location:  ./index.php");
        } else {

            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
    } else {
        echo 'Campos vacios';
    }
}
