<?php

    function getEmpresa()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtEmpresa'];
    }

    function getNombre()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtNombre'];
    }

    function getApellido()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtApellido'];
    }

    function getNum()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtNum'];
    }

    function getCorreo()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtCorreo'];
    }

    function getRfc()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtRfc'];
    }

    function getCantidad()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtCantidad'];
    }

    function getDescripcion()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['txtDescripcion'];
    }

    function getEntrga()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
            return $_POST['selEntrega'];
    }
?>