<?php

    include_once "funciones/fun_usuario.php";
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
   
    $logueadoConExito = login($nombre, $password);

    if ($logueadoConExito) {
        header("Location: bienvenida.php");
        exit;
    } else {
         echo '
            <script>
            alert("Usuario o contraseña incorrecta");
            window.location = "../index.php";
            </script>
        ';
    }

  
?>
