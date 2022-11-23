<?php
session_start();
    if(!empty($_POST["loginb"])){
        if(!empty($_POST["user"]) and !empty($_POST["password"])){
            $user = $_POST["user"];
            $password = $_POST["password"];
            $sql = mysqli_query($con,"select * from Usuarios where email='$user' and contraseña='$password'");
            echo 'Response'.$sql;
            if($datos=$sql){
                echo 'Test';
            }else{
                echo '<div class="alert alert-danger">Acceso denegado</div>';
            };
        }else{
            echo 'Campos vacios';
        };
    };
?>