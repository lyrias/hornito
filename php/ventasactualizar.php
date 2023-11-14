<?php

    
    #datos de la base de datos
    $nombre_base_de_datos = "hornito";
    $usuario = "root";
    $contrasenia = "";
    #conexion hacia la BD
    $conexion = mysqli_connect("localhost", $usuario, $contrasenia, $nombre_base_de_datos) or die("problemas con la conexion");
    

    $cant_edit = $stock_origen-$cantidad_mando
    #$sql_edit = mysqli_query($conexion,"UPDATE `productos` SET `stock` = '$cant_edit' WHERE `productos`.`id_producto` = '$id_edit'");
?>