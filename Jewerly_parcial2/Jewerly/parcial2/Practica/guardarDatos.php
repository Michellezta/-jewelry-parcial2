<?php

    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $material = $_POST["material"];

    $sql = "INSERT INTO joyas (nombre, precio, material)" .
    "VALUE ('".$nombre."', '.$precio.', '".$material."')";

    if($conexion->query($sql) === TRUE){
        echo "Registro guardado con Éxito <a href='consultarDatos.php'>Regresar</a>";
    } else {
        echo "Error: " .$sql. "<br>" .$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }
    $conexion->close();
?>
