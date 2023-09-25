<?php
    session_start();
    
    include 'conexion_be.php';

    //echo "Tu nombre: "; echo $_POST['nombre']; echo "<br/>";
    //echo "Tu contraseña: "; echo $_POST['password']; echo "<br/>";
   

    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre='$nombre' and password='$password'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $nombre;
        header("location: ./bienvenida.php");
        exit;
    }else{
            echo '
               <script>
                    alert("Usuario inexistente, favor verificar sus datos correctamente");
                    window.location = "../index.php";
                </script>
            ';
            exit;
    }
    
?>
