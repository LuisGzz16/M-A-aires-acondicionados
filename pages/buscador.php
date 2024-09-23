<?php
  include ("conexion.php");

  if(!isset($_POST['busqueda']))  {
    $_POST['busqueda'] = "";
    $busqueda = $_POST['busqueda'];
  }

  $busqueda = $_POST['busqueda'];
  $resultado = "SELECT * FROM clientes WHERE nom_clientes LIKE '%$busqueda%' OR
    ap_clientes LIKE '%$busqueda%' OR num_clientes LIKE '%$busqueda%' OR
    correo_clientes LIKE '%$busqueda%' OR ubi_clientes LIKE '%$busqueda%'";
  $resultado = mysqli_query($mysqli, $resultado);

?>