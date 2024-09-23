<?php

    include ("conexion.php");

    if (isset($_POST['regclientes'])) {

        if (strlen($_POST['marca_producto']) >= 1 &&
        strlen($_POST['precio_producto']) >= 1) {

            $producto = trim($_POST['marca_producto']);
            $precio = trim($_POST['precio_producto']);
            $consulta = "INSERT INTO `productos`(`precio_producto`, `marca_producto`)
            VALUES ('$precio','$producto')";
            $resultado = mysqli_query($mysqli, $consulta);
        }
    }

?>
