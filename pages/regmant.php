<?php

include ("conexion.php");


    $cadenaSQL = "insert into detallemant (id_producto, fecha_mant, id_clientes)
    values(".$_POST['idProductos'].",'".$_POST['fechamant']."', ".$_POST['idClientes']." )";

    $sql=$mysqli->query($cadenaSQL);

    if (!$sql) {
        echo "La cadena SQL está mal ejecutada";
    } else {
        echo "La insercion de datos fue correcta";
    }
    header("Location: tables.php");
?>