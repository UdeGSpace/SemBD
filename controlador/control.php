<?php

    require "./modelo/conexion.php";
    $con = conecta();

    $num = 0; 
    $user = $_POST["user"];
    $password = $_POST["password"];
    $password = md5($password);
    
    if(!empty($_POST["loginb"])){
        if(!empty($user) and !empty($password)){
            $query = "select ClienteId from Clientes where mail='$user' and password='$password'";
            $sql = $con->query($query);
            $idU = $sql->fetch_object()->ClienteId;
            echo $idU;    
        }else{
            echo 'Campos vacios';
        }
        if($sql){
            $query = "select ClienteNom from Clientes where ClienteId ='$idU'";
            $sql = $con->query($query);
            $nombre = $sql->fetch_object()->ClienteNom;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['idU'] = $idU;
            echo "Bienvenido " . $nombre;
        }else{
            echo '<div class="alert alert-danger">Acceso denegado</div>';
        }
        }
?>