<?php

    include("conexion.php");

    $id = $_GET['id_actualizar'];
    $eliminar = "DELETE FROM clientes WHERE id_Clientes='$id'";
    $resultado = mysqli_query($mysqli, $eliminar);
    
    if ($resultado) {
        header("Location: rtl.php");
    } else {
        echo "<script>alert('No se han podido eliminar los archivos'); window.history.go(-1);</script>";
    }
?>