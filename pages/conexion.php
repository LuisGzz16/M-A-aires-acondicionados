<?php
    $mysqli = new mysqli("localhost:3307", "root", "", "bdaydes");
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else
?>