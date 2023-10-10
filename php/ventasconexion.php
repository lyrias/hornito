<?php
    #datos de la base de datos
    $nombre_base_de_datos = "hornito";
    $usuario = "root";
    $contrasenia = "";
    #conexion hacia la BD
    $conexion = mysqli_connect("localhost", $usuario, $contrasenia, $nombre_base_de_datos) or die("problemas con la conexion");
    $vector = array();
    $sql_count = mysqli_query($conexion,"SELECT COUNT(*) as total_registro FROM productos");
    $result_count = mysqli_fetch_array($sql_count);
	$total_count = $result_count['total_registro'];
    $datos_productos = mysqli_query($conexion, "SELECT nombre, ruta, precio, stock FROM productos") or die("Problemas con la consulta");
    while($reg = mysqli_fetch_array($datos_productos)){
        /*
        echo "Nombre: ". $reg['nombre'] ." ";
        echo "Precio: ". $reg['precio'] ." ";
        echo "Stock: ". $reg['stock'] ." ";
        echo "<br>";
        */
        $vector[]=$reg; 

    }
    

    
?>