<?php
        session_start();

        if(isset($_SESSION['usuario'])){
            header("location: php/bienvenida.php");
        }

?>
    <!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="assets/css/styles.css">

      <title>Login Hornito</title>
   </head>
 <body>
    
      <div class="login">
         <img src="assets/img/Fondo_Login.png"  alt="login image" class="login__img">

         <form action="php/login_usuario_be.php" method="post" class="login__form">
            <h1 class="login__title">Login</h1>

            <div class="login__content">
               <div class="login__box">
                  <i class="ri-user-3-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="text" required class="login__input" placeholder=" " name="nombre">
                     <label for="" class="login__label">Usuario</label>
                  </div>
               </div>

               <div class="login__box">
                  <i class="ri-lock-2-line login__icon"></i>

                  <div class="login__box-input">
                     <input type="password" required class="login__input" id="login-pass" placeholder=" " name="password">
                     <label for="" class="login__label">Contrasenia</label>
                     <i class="ri-eye-off-line login__eye" id="login-eye"></i>
                  </div>
               </div>
            </div>

            <button type="submit" class="login__button">Ingresar</button>
         </form>
      </div>
      
      <!--=============== MAIN JS ===============-->
      <script src="assets/js/main.js"></script>
        
  </body>
</html>
