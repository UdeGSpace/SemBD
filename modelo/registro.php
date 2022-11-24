<?php
    require "conexion.php";
    $con = conecta();

    $num = 0; 
    $name = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rfc = $_POST["rfc"];
    $empresa = $_POST["empresa"];
    $tel = $_POST["telefono"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];
    $password = md5($password);
    echo "Point 1";
    if(!empty($_POST["submit"])){
        if(!empty($name) and !empty($password)){
            echo "Point 2";
            $query = "insert into Clientes(ClienteNom,ClienteApe,RFC,Empresa,ClienteTel,mail,password)values('$name','$apellido','$rfc','$empresa','$tel','$mail','$password')";
            if($con->query($query)===TRUE){
                echo "Nuevo usuario";
                echo $con->error;
            }
        }
    }
?>