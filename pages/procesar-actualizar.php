<?php
    include("conexion.php");

    if (isset($_POST['actclientes'])) {

        if ( strlen($_POST['id_Clientes']) >= 1 &&
        strlen($_POST['nom_clientes']) >= 1 &&
        strlen($_POST['ap_clientes']) >= 1 &&
        strlen($_POST['correo_clientes']) >= 1 &&
        strlen($_POST['num_clientes']) >= 1 &&
        strlen($_POST['ubi_clientes']) >= 1) {
            
            $id = trim($_POST['id_Clientes']);
            $nombre = trim($_POST['nom_clientes']);
            $apellidos = trim($_POST['ap_clientes']);
            $email = trim($_POST['correo_clientes']);
            $telefono = trim($_POST['num_clientes']);
            $ciudad = trim($_POST['ubi_clientes']);
            $actualizar = "UPDATE clientes SET nom_clientes='$nombre', ap_clientes='$apellidos', 
            correo_clientes='$email', num_clientes='$telefono', ubi_clientes='$ciudad' WHERE id_Clientes='$id'";
            $resultado = mysqli_query($mysqli, $actualizar);
        }
        
        if ($resultado) {
            echo "<script> window.location='rtl.php' </script>";
        } else {
            echo "<script>alert('No se han podido actualizar los cambios'); window.history.go(-1);</script>";
        }
    }
?>