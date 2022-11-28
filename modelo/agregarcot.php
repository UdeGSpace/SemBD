<?php
include_once 'conexion.php';
include_once 'obtener_datos.php';


    if (isset($_POST['btn-agr-cot'])) {
        $empresa = getEmpresa();
        $nombre = getNombre();
        $apellido = getApellido();
        $numero = getNum();
        $correo = getCorreo();
        $rfc = getRfc();
        $cantida = getCantidad();
        $descripcion = getDescripcion();
        $entrega = getEntrga();

        $insert_coti = "INSERT INTO cotizaciones(ClienteNom, ClienteApe, RFC, Empresa, Entrega) 
                    VALUES ('$nombre', '$apellido', '$rfc', '$empresa', '$entrega')";

        header("Location: ../index.php");
    }
?>