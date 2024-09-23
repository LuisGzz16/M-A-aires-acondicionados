<?php

    include("conexion.php");

    $detalle_mant = $_GET['det_mant'];
    $eliminar = "DELETE FROM detallemant WHERE det_mant='$detalle_mant'";
    $resultado = mysqli_query($mysqli, $eliminar);
    
    if ($resultado) {
        header("Location: tables.php");
    } else {
        echo "<script>alert('No se han podido eliminar los archivos'); window.history.go(-1);</script>";
    }
?>