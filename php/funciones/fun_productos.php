<?php   
    include_once "conexion_be.php";

    function registrarProducto($nombre, $precio, $stock, $ruta){ 
        $base_de_datos = obtenerBaseDeDatos();
        $sentencia = $base_de_datos->prepare("INSERT INTO productos (nombre,ruta,precio,stock) values(?, ?, ?, ?)");
        return $sentencia->execute([$nombre, $ruta, $precio, $stock]);
    }

    function listarProducto(){ 
        $base_de_datos = obtenerBaseDeDatos();
        $sql = "SELECT * FROM productos;";
        $query = $base_de_datos->prepare($sql);
        $query->execute();
        $listaProductos = $query->fetchAll(PDO::FETCH_ASSOC);
        return $listaProductos;
    }
?>