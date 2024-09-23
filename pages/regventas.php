<?php

include ("conexion.php");

if (isset($_POST['regventas'])) {

    if (strlen($_POST['nom_clientes']) >= 1 &&
    strlen($_POST['ap_clientes']) >= 1 &&
    strlen($_POST['correo_clientes']) >= 1 &&
    strlen($_POST['num_clientes']) >= 1 &&
    strlen($_POST['ubi_clientes']) >= 1) {

        $nombre = trim($_POST['nom_clientes']);
        $apellidos = trim($_POST['ap_clientes']);
        $email = trim($_POST['correo_clientes']);
        $telefono = trim($_POST['num_clientes']);
        $ciudad = trim($_POST['ubi_clientes']);
        $consulta = "INSERT INTO `clientes`(`nom_clientes`, `ap_clientes`, `correo_clientes`, `num_clientes`, `ubi_clientes`)
        VALUES ('$nombre','$apellidos','$email','$telefono','$ciudad')";
        $resultado = mysqli_query($mysqli, $consulta);
    }
}

?>