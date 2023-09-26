<?php

include_once "conexion_be.php";

function login($nombre, $password){
    $posibleUsuarioRegistrado = obtenerUsuarioPorNombre($nombre);
    if ($posibleUsuarioRegistrado === false) {
        return false;
    }
    $passwordBaseDeDatos = $posibleUsuarioRegistrado->password;
    $coinciden = coincidenPalabrasSecretas($password, $passwordBaseDeDatos);
    if (!$coinciden) {
        return false;
    }
    iniciarSesion($posibleUsuarioRegistrado);
    return true;
}

function usuarioExiste($correo){
    $base_de_datos = obtenerBaseDeDatos();
    $sentencia = $base_de_datos->prepare("SELECT nombre FROM usuarios WHERE nombre = ? LIMIT 1;");
    $sentencia->execute([$correo]);
    return $sentencia->rowCount() > 0;
}

function obtenerUsuarioPorNombre($nombre){
    $base_de_datos = obtenerBaseDeDatos();
    $sentencia = $base_de_datos->prepare("SELECT nombre,password,id_usuario,permisos FROM usuarios WHERE nombre = ? LIMIT 1;");
    $sentencia->execute([$nombre]);
    return $sentencia->fetchObject();
}

function registrarUsuario($correo, $palabraSecreta,$ci,$telefono,$permiso){ 
    $palabraSecreta = hashearPalabraSecreta($palabraSecreta);
    $base_de_datos = obtenerBaseDeDatos();
    $sentencia = $base_de_datos->prepare("INSERT INTO usuarios(nombre,ci,telefono,password,permisos) values(?, ?, ?, ?, ?)");
    return $sentencia->execute([$correo,$ci,$telefono,$palabraSecreta,$permiso]);
}


function iniciarSesion($usuario){

    session_start();
    $_SESSION["id_usuario"] = $usuario->id_usuario;
    $_SESSION["nombre"] = $usuario->nombre;
    $_SESSION["permisos"] = $usuario->permisos;
}


function coincidenPalabrasSecretas($password, $passwordBaseDeDatos){
    return password_verify($password, $passwordBaseDeDatos);
}

function hashearPalabraSecreta($palabraSecreta){    
    return password_hash($palabraSecreta, PASSWORD_BCRYPT);
}